<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\AbstractModel;

abstract class AbstractScreen extends AbstractModel {

    /** @var string */
    public $ref;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var bool */
    public $showButton;

    /** @var string */
    public $buttonText;

    /** @var ?Attachment */
    public $attachment;

    public function __construct(array $json) {
        $this->attachment = !empty($json['attachment'])
            ? new Attachment($json['attachment'])
            : null;

        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }

}