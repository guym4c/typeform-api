<?php

namespace Guym4c\TypeformAPI\Model;

abstract class SimpleAbstractModel extends AbstractModel {

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}