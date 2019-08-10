<?php

namespace Guym4c\TypeformAPI\Model\Utils\Field;

class PaymentField extends ButtonField {

    /**
     * @var string
     * @see Currency
     */
    public $currency;

    /** @var array */
    public $price;

    public function __construct(array $json) {
        $this->hydrate($json);
        $this->hydrate($json['properties']);
    }

}