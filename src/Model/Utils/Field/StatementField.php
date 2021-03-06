<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class StatementField extends ButtonField {

    /** @var bool */
    public $hideMarks;

    public function __construct(array $json) {
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }
}