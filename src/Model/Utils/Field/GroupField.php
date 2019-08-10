<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\Utils\Choice;
use Guym4c\TypeformAPI\Model\Webhook\Field;

class GroupField extends GenericField {

    //TODO
    
    /** @var array */
    public $fields;

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}