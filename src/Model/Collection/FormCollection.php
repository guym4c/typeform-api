<?php

namespace Guym4c\TypeformAPI\Model\Resource\Collection;

use Guym4c\TypeformAPI\Model\Collection\FormLoader;

class FormCollection extends AbstractCollection {

    /** @var FormLoader[] */
    public $items;

    public function __construct(array $json) {
        parent::__construct(FormLoader::class, $json);
    }

}