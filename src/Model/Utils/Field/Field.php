<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use Guym4c\TypeformAPI\Model\AbstractUniqueModel;
use Guym4c\TypeformAPI\Model\Utils\Field\FieldType as Type;

abstract class Field extends AbstractUniqueModel {

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

    public static function constructField(array $json): self {

        switch ($json['type']) {

            case Type::DATE:
                return new DateField($json);

            case Type::DROPDOWN:
                return new DropdownField($json);

            case Type::GROUP:
                return new GroupField($json);

            case Type::MULTIPLE_CHOICE:
                return new MultipleChoiceField($json);

            case Type::OPINION_SCALE:
                return new OpinionField($json);

            case Type::PAYMENT:
                return new PaymentField($json);

            case Type::PICTURE_CHOICE:
                return new PictureChoiceField($json);

            case Type::RATING:
                return new ScaleField($json);

            case Type::STATEMENT:
                return new StatementField($json);

            default:
                return new SimpleField($json);
        }
    }
}