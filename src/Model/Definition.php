<?php

namespace Guym4c\TypeformAPI\Model;

class Definition extends AbstractModel {

    /** @var string */
    public $id;

    /** @var string */
    public $title;

    /** @var Field[] */
    public $fields;

    public function __construct(array $json) {

        foreach ($json['fields'] as $field) {
            $this->fields[] = new Field($field);
        }

        $this->hydrate($json);
    }

}