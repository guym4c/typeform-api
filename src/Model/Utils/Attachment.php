<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\AbstractModel;

class Attachment extends AbstractModel {

    /**
     * @var string
     * @see AttachmentType
     */
    public $type;

    /** @var string */
    public $href;

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}