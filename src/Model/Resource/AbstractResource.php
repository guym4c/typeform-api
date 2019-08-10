<?php

namespace Guym4c\TypeformAPI\Model\Resource;

use Guym4c\TypeformAPI\Model\AbstractModel;
use Guym4c\TypeformAPI\Typeform;

abstract class AbstractResource extends AbstractModel {

    abstract public static function get(Typeform $typeform, string $id);

    abstract public function persist();

    abstract public function delete();

//    abstract public static function list();
}