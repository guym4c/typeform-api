<?php

namespace Guym4c\TypeformAPI\Model\Resource;

use Guym4c\TypeformAPI\Model\AbstractModel;

abstract class AbstractResource extends AbstractModel {

    abstract public static function get();

    abstract public function persist();

    abstract public function delete();

    abstract public static function list();
}