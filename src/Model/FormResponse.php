<?php

namespace Guym4c\TypeformAPI\Model;

use DateTime;

class FormResponse extends AbstractModel {

    /** @var string */
    public $formId;

    /** @var string */
    public $token;

    /** @var DateTime */
    public $landedAt;

    /** @var DateTime */
    public $submittedAt;

    /** @var array */
    public $hidden;

    /** @var Definition */
    public $definition;

    /** @var Answer[] */
    public $answers;

    public function __construct(array $json) {

        $this->landedAt = strtotime($json['landed_at']);
        $this->submittedAt = strtotime($json['submitted_at']);
        $this->definition = new Definition($json['definition']);

        foreach ($json['answers'] as $answer) {
            $this->answers[] = new Answer($answer, $this->definition);
        }

        $this->hydrate($json);
    }

}