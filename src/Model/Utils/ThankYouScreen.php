<?php

namespace Guym4c\TypeformAPI\Model\Utils;

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