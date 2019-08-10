<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

use MyCLabs\Enum\Enum;

class DateStructure extends Enum {

    const AMERICAN = 'MMDDYYYY';
    const STANDARD = 'DDMMYYYY';
    const ISO_8601 = 'YYYYMMDD';
}