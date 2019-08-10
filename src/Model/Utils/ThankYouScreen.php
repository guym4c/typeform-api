<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\AbstractModel;

class ThankYouScreen extends AbstractScreen {

    /**
     * @var string
     * @see ThankYouButtonMode
     */
    public $buttonMode;

    /** @var string */
    public $redirectUrl;

    /** @var bool */
    public $shareIcons;
}