<?php

namespace Guym4c\TypeformAPI;

use Exception;
use Guym4c\TypeformAPI\Model\Webhook\WebhookRequest;
use Psr\Http\Message\RequestInterface;

class Typeform {

    protected $key;

    const BASE_URI = 'https://api.typeform.com';

    public function __construct(string $key) {
        $this->key = $key;
    }

    /**
     * @param RequestInterface $request
     * @param string|null      $secret
     * @return WebhookRequest
     * @throws Exception
     */
    public static function parseWebhook(RequestInterface $request, ?string $secret = null): WebhookRequest {
        return WebhookRequest::parseRequest($request, $secret);
    }

    /**
     * @param string $json
     * @return WebhookRequest
     * @throws Exception
     */
    public static function parseWebhookJson(string $json): WebhookRequest {
        return WebhookRequest::parseJson($json);
    }

    public static function validateWebhookSignature(RequestInterface $request, string $secret): bool {
        return WebhookRequest::validateSignature($request, $secret);
    }

    /**
     * @return string
     */
    public function getKey(): string {
        return $this->key;
    }
}