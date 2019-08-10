<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class DateField extends Field {

    /**
     * @var string
     * @see DateStructure
     */
    public $structure;

    /**
     * @var string
     * @see DateSeparator
     */
    public $separator;

    public function __construct(array $json) {
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }

}