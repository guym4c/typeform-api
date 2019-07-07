<?php

namespace Guym4c\TypeformAPI\Model;

class Answer extends AbstractModel {

    public $type;

    public $field;

    public $answer;

    public function __construct(array $json) {

        $this->answer = $json['text'] ??
            $json['choice'] ??
            $json['email'] ??
            $json['date'] ??
            $json['boolean'] ??
            $json['url'] ??
            $json['number'] ??
            $json['file_url'] ??
            (object) $json['payment'];

        $this->field = new Field($json['field']);

        self::hydrate($this, $json);
    }
}