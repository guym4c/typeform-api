<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\SimpleAbstractModel;

class LogicJump extends SimpleAbstractModel {

    /**
     * @var string
     * @see LogicJumpType
     */
    public $type;

    /** @var string */
    public $ref;

    /** @var array */
    public $actions; //TODO
}