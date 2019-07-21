<?php

namespace Guym4c\TypeformAPI\Model;

abstract class AbstractModel {

    protected function parsePropertyName(string $property) {
        return strtolower(
            preg_replace('/([A-Z])/', '_$1', $property));
    }

    protected function hydrate(array $json): void {
        foreach (get_object_vars($this) as $property => $value) {

            if (empty($value)) {
                $this->{$property} = $json[$this->parsePropertyName($property)] ?? null;
            }
        }
    }
}