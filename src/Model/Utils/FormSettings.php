<?php

namespace Guym4c\TypeformAPI\Model\Utils;

use Guym4c\TypeformAPI\Model\AbstractModel;

class FormSettings extends AbstractModel {

    /**
     * @var string
     * @see FormLanguage
     */
    public $language;

    /** @var ?bool */
    public $isPublic;

    /**
     * @var string
     * @see ProgressBarBasis
     */
    public $progressBar;

    /** @var ?bool */
    public $showProgressBar;

    /** @var ?bool */
    public $showTypeformBranding;

    /** @var ?bool */
    public $showTimeToComplete;

    /** @var ?string */
    public $redirectAfterSubmitUrl;

    /** @var ?string */
    public $googleAnalytics;

    /** @var string */
    public $facebookPixel;

    /** @var string */
    public $googleTagManager;

    /** @var array */
    public $meta;

    /** @var ?array */
    public $notifications;

    public function __construct(array $json) {
        $this->hydrate($json);
    }
}