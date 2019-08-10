<?php

namespace Guym4c\TypeformAPI\Model\Resource\Collection;

use Guym4c\TypeformAPI\Model\AbstractModel;

abstract class AbstractCollection extends AbstractModel {

    public $totalItems;

    public $pageCount;

    public $items;
}