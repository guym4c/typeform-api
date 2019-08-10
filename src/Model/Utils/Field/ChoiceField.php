<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\Utils\Choice;

class ChoiceField extends GenericField {

    /** @var Choice[] */
    public $choices;

    public function __construct(array $json) {
        $this->populateArrayType(Choice::class, 'choices', $json);
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }
}