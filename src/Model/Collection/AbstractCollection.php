<?php

namespace Guym4c\TypeformAPI\Model\Collection;

use Guym4c\TypeformAPI\Model\AbstractModel;

abstract class AbstractCollection extends AbstractModel {

    public $totalItems;

    public $pageCount;

    public $items;

    public function __construct(string $itemResource, array $json) {
        foreach ($json['items'] as $item) {
            $this->items[] = new $itemResource($item);
        }
        $this->hydrate($json);
    }
}