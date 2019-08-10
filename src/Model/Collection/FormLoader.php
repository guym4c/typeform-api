<?php

namespace Guym4c\TypeformAPI\Model\Collection;

use Guym4c\TypeformAPI\Model\Resource\Collection\Loader;
use Guym4c\TypeformAPI\Model\Resource\Form;

class FormLoader extends Loader {

    /** @var string */
    public $id;

    /** @var string */
    public $title;

    public function __construct(string $typeform, array $json) {
        parent::__construct($typeform, Form::class, $json['self'][['href']]);
        $this->hydrate($json);
    }

    public function load(): Form {
        return parent::load();
    }
}