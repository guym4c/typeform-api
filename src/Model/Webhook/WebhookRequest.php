<?php

namespace Guym4c\TypeformAPI\Model\Webhook;

use Exception;
use Guym4c\TypeformAPI\Model\AbstractUniqueModel;
use Psr\Http\Message\RequestInterface;

class WebhookRequest extends AbstractUniqueModel {

    /** @var string */
    public $eventType;

    /** @var FormResponse */
    public $formResponse;

    /** @var ?bool */
    public $valid;

    /** @var ?string  */
    public $error;

    /**
     * WebhookRequest constructor.
     * @param array $json
     * @throws Exception
     */
    public function __construct(array $json) {

        $this->id = $json['event_id'];
        $this->formResponse = new FormResponse($json['form_response']);

        if (json_last_error() != JSON_ERROR_NONE) {
            $this->valid = false;
            $this->error = 'JSON: ' . json_last_error_msg();
        }

        $this->hydrate($json);
    }

    /**
     * @param RequestInterface $request
     * @param string|null      $secret
     * @return WebhookRequest
     * @throws Exception
     */
    public static function parseRequest(RequestInterface $request, ?string $secret = null): self {
        $json = json_decode($request->getBody()->getContents(), true);

        $event = new self($json);

        if (!empty($secret)) {
            $event->valid = self::validateSignature($request, $secret);
            $event->error = 'Signature invalid';
        }

        return $event;

    }

    /**
     * @param string $json
     * @return WebhookRequest
     * @throws Exception
     */
    public static function parseJson(string $json): self {
        return new self(json_decode($json, true));
    }

    public static function validateSignature(RequestInterface $request, string $secret): bool {

        return 'sha256=' . base64_encode(
                hash_hmac('sha256', $request->getBody(), $secret, true)) ==
            $request->getHeader('Typeform-Signature')[0];
    }
}