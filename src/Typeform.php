<?php

namespace Guym4c\TypeformAPI;

use Guym4c\TypeformAPI\Model\WebhookRequest;
use GuzzleHttp;
use Psr\Http\Message\RequestInterface;

class Typeform {

    protected $http;

    protected $key;

    const BASE_URI = 'https://api.typeform.com';

    public function __construct(string $key) {
        $this->key = $key;
        $this->http = new GuzzleHttp\Client();
    }

    public static function parseWebhook(RequestInterface $request, ?string $secret = null): WebhookRequest {
        return WebhookRequest::parseRequest($request, $secret);
    }

    public static function parseWebhookJson(string $json): WebhookRequest {
        return WebhookRequest::parseJson($json);
    }

    public static function validateWebhookSignature(RequestInterface $request, string $secret): bool {
        return WebhookRequest::validateSignature($request, $secret);
    }

}