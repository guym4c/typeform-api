<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use MyCLabs\Enum\Enum;
use ReflectionClass;

class FieldType extends Enum {
    const DATE = 'date';
    const DROPDOWN = 'dropdown';
    const EMAIL = 'email';
    const FILE_UPLOAD = 'file_upload';
    const GROUP = 'group';
    const LEGAL = 'legal';
    const LONG_TEXT = 'long_text';
    const MULTIPLE_CHOICE = 'multiple_choice';
    const NUMBER = 'number';
    const OPINION_SCALE = 'opinion_scale';
    const PAYMENT = 'payment';
    const PICTURE_CHOICE = 'picture_choice';
    const RATING = 'rating';
    const SHORT_TEXT = 'short_text';
    const STATEMENT = 'statement';
    const WEBSITE = 'website';
    const YES_NO = 'yes_no';
    const PHONE_NUMBER = 'phone_number';

    public static function getAll(): array {
        return array_values((new ReflectionClass(self::class))
            ->getConstants());
    }
}