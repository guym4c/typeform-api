<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\Utils\Choice;

class ChoiceField extends Field {

    /** @var Choice[] */
    public $choices;

    public function __construct(array $json) {
        $this->populateArrayType(Choice::class, 'choices', $json['properties']);
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }
}