<?php

namespace Guym4c\TypeformAPI\Model\Resource;

use Guym4c\TypeformAPI\Model\Collection\Loader;
use Guym4c\TypeformAPI\Model\Utils\Field\Field;
use Guym4c\TypeformAPI\Model\Utils\FormSettings;
use Guym4c\TypeformAPI\Model\Utils\LogicJump;
use Guym4c\TypeformAPI\Model\Utils\ThankYouScreen;
use Guym4c\TypeformAPI\Model\Utils\WelcomeScreen;
use Guym4c\TypeformAPI\Request;
use Guym4c\TypeformAPI\Typeform;
use Guym4c\TypeformAPI\TypeformApiException;

class Form extends AbstractResource {

    /** @var string */
    public $id;

    /** @var string */
    public $title;

    /** @var string */
    public $language;

    /** @var Field[] */
    public $fields;

    /** @var string[] */
    public $hidden;

    /** @var WelcomeScreen[] */
    public $welcomeScreens;

    /** @var ThankYouScreen[] */
    public $thankyouScreens;

    /** @var LogicJump[] */
    public $logic;

    /** @var Loader */
    public $theme;

    /** @var Loader */
    public $workspace;

    /** @var array */
    public $settings; //TODO

    /** @var string */
    public $url;

    public function __construct(Typeform $typeform, array $json) {

        foreach ($json['fields'] as $field) {
            $this->fields[] = Field::constructField($field);
        }
        $this->populateArrayType(WelcomeScreen::class, 'welcomeScreens', $json);
        $this->populateArrayType(ThankYouScreen::class, 'thankyouScreens', $json);
        $this->populateArrayType(LogicJump::class, 'logic', $json);
        $this->theme = new Loader($typeform, '' /* TODO */, $json['theme']['href']);
        $this->workspace = new Loader($typeform, '' /* TODO */, $json['workspace']['href']);
        $this->settings = new FormSettings($json['settings']);
        $this->url = $json['_links']['display'];

        $this->hydrate($json);
    }

    /**
     * @param Typeform $typeform
     * @param string   $id
     * @return Form
     * @throws TypeformApiException
     */
    public static function get(Typeform $typeform, string $id): self {
        return new self($typeform, (new Request($typeform, 'GET', "forms/{$id}", ['page_size' => 1]))
            ->getJsonResponse());
    }

    public function persist() {
        // TODO: Implement persist() method.
    }

    public function delete() {
        // TODO: Implement delete() method.
    }

    public static function list() {
        // TODO: Implement list() method.
    }
}