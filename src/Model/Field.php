<?php

namespace Guym4c\TypeformAPI\Model;

class Field extends AbstractModel {

    /** @var string */
    public $id;

    /** @var string */
    public $title;

    /** @var string */
    public $type;

    /** @var string */
    public $ref;

    /** @var array */
    public $properties;

    public function __construct(array $json) {
        self::hydrate($this, $json);
    }

}