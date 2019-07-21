<?php

namespace Guym4c\TypeformAPI\Model;

class Answer extends AbstractModel {

    public $type;

    public $field;

    public $answer;

    public function __construct(array $json, Definition $definition) {

        $this->answer = $json['text'] ??
            $json['choice'] ??
            $json['email'] ??
            $json['date'] ??
            $json['boolean'] ??
            $json['url'] ??
            $json['number'] ??
            $json['file_url'] ??
            $json['payment'];

        $this->field = $this->getFieldFromDefinition($json['field']['id'], $definition);

        $this->hydrate($json);
    }

    private function getFieldFromDefinition(string $answerFieldId, Definition $definition): ?Field {

        foreach ($definition->fields as $field) {

            if ($field->id = $answerFieldId) {
                return $field;
            }
        }

        return null;
    }
}