<?php

namespace Guym4c\TypeformAPI\Model\Webhook;

use Guym4c\TypeformAPI\Model\AbstractUniqueModel;

class Definition extends AbstractUniqueModel {

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