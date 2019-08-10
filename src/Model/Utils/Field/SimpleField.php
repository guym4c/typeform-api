<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class SimpleField extends Field {

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}