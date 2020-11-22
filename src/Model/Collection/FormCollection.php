<?php

namespace Guym4c\TypeformAPI\Model\Collection;

class FormCollection extends AbstractCollection {

    /** @var FormLoader[] */
    public $items;

    public function __construct(array $json) {
        parent::__construct(FormLoader::class, $json);
    }

}