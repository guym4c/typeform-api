<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

abstract class AbstractMultipleChoiceField extends ChoiceField {

    /** @var bool */
    public $allowMultipleSelection;

    /** @var bool */
    public $randomize;

    /** @var bool */
    public $allowOtherChoice;
}