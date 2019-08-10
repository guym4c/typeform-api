<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\AbstractUniqueModel;

class GenericField extends AbstractUniqueModel {

    /** @var string */
    public $ref;

    /** @var string */
    public $title;

    /**
     * @var string
     * @see FieldType
     */
    public $type;

    /** @var string */
    public $description;
}