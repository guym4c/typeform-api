<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class GroupField extends Field {

    //TODO

    /** @var array */
    public $fields;

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}