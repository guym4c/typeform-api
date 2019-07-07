<?php

namespace Guym4c\TypeformAPI\Model;

abstract class AbstractModel {

    protected function parsePropertyName(string $property) {
        return strtolower(
            preg_replace('/([A-Z])/', '_$1', $property));
    }

    protected static function hydrate(AbstractModel $model, array $json): void {
        foreach (get_object_vars($model) as $property => $value) {

            if (empty($value)) {
                $model->{$property} = $json[$model->parsePropertyName($property)] ?? null;
            }
        }
    }
}