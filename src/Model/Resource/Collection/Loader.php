<?php

namespace Guym4c\TypeformAPI\Model\Resource\Collection;

use Guym4c\TypeformAPI\Request;
use Guym4c\TypeformAPI\Typeform;
use Guym4c\TypeformAPI\TypeformApiException;

class Loader {

    /** @var Typeform */
    private $typeform;

    /** @var string */
    private $resource;

    /** @var string */
    private $href;

    public function __construct(string $typeform, string $resource, string $href) {
        $this->typeform = $typeform;
        $this->resource = $resource;
        $this->href = $href;
    }

    /**
     * @return mixed
     * @throws TypeformApiException
     */
    public function load() {
        return new $this->resource((new Request($this->typeform, 'GET', $this->href))
            ->getJsonResponse());
    }
}