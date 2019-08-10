<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class ScaleField extends GenericField {

    /** @var int */
    public $steps;

    /**
     * @var string
     * @see ScaleShape
     */
    public $shape;

    /** @var ScaleLabels */
    public $labels;

    public function __construct(array $json) {
        $this->labels = new ScaleLabels($json['labels']);
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }

}