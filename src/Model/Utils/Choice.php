<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\AbstractModel;

class Choice extends AbstractModel {

    /** @var string */
    public $ref;

    /** @var string */
    public $label;

    /** @var Attachment */
    public $attachment;

    public function __construct(array $json) {
        $this->attachment = new Attachment($json['attachment']);
        $this->hydrate($json);
    }
}