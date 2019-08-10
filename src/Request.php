<?php

namespace Guym4c\TypeformAPI;

use GuzzleHttp;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7;
use Teapot\StatusCode;

class Request {

    private const API_ENDPOINT = 'https://api.typeform.com/';

    /** @var Typeform */
    private $typeform;

    /** @var GuzzleHttp\Client */
    private $http;

    /** @var Psr7\Request */
    private $request;

    /** @var array */
    private $options = [];

    public function __construct(Typeform $typeform, string $method, string $uri = '', array $query = [], array $body = []) {

        // TODO check if URI needs endpoint prepending

        $this->typeform = $typeform;
        $this->http = new GuzzleHttp\Client();
        $this->request = new Psr7\Request($method, self::API_ENDPOINT . "/{$uri}");
        $this->request = $this->request->withHeader('Authorization', 'Bearer ' . $this->typeform->getKey());

        if (!empty($query)) {
            $this->options['query'] = $query;
        }

        if (!empty($body)) {
            $this->options['json'] = $body;
        }

        if ($method != 'GET') {
            $this->request = $this->request->withHeader('Content-Type', 'application/json');
        }
    }

    /**
     * @return array
     * @throws TypeformApiException
     */
    public function getJsonResponse(): array {
        try {
            $response = $this->http->send($this->request, $this->options);
        } catch (GuzzleException $e) {
            throw TypeformApiException::fromGuzzle($e);
        }

        $responseBody = (string)$response->getBody();
        $responseCode = $response->getStatusCode();

        if ($responseCode !== StatusCode::OK) {
            throw TypeformApiException::fromErrorResponse($responseCode, $responseBody);
        }

        return json_decode($responseBody, true);
    }
}