<?php

namespace Guym4c\TypeformAPI\Model\Collection;

use Guym4c\TypeformAPI\Model\AbstractModel;
use Guym4c\TypeformAPI\Request;
use Guym4c\TypeformAPI\Typeform;
use Guym4c\TypeformAPI\TypeformApiException;

class Loader extends AbstractModel {

    /** @var Typeform */
    private $typeform;

    /** @var string */
    private $resource;

    /** @var string */
    private $href;

    public function __construct(Typeform $typeform, string $resource, string $href) {
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