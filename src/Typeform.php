<?php

namespace Guym4c\TypeformAPI;

use Guym4c\TypeformAPI\Model\WebhookRequest;
use GuzzleHttp;
use Nyholm\Psr7\Request;

class Typeform {

    protected $http;

    protected $key;

    const BASE_URI = 'https://api.typeform.com';

    public function __construct(string $key) {
        $this->key = $key;
        $this->http = new GuzzleHttp\Client();
    }

    public static function parseWebhook(Request $request, ?string $secret = null): WebhookRequest {
        return new WebhookRequest($request);
    }

    public static function parseWebhookJson(string $json): WebhookRequest {
        return WebhookRequest::parseJson($json);
    }

    public static function validateWebhookSignature(Request $request, string $secret): bool {
        return WebhookRequest::validateSignature($request, $secret);
    }

}