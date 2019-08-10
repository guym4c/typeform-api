<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\Utils\Choice;

class ButtonField extends GenericField {

    /** @var string */
    public $buttonText;

    public function __construct(array $json) {
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }
}