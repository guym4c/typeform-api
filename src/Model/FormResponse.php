<?php

namespace Guym4c\TypeformAPI\Model;

use DateTime;
use Exception;

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

    /**
     * FormResponse constructor.
     * @param array $json
     * @throws Exception
     */
    public function __construct(array $json) {

        $this->landedAt = new DateTime($json['landed_at']);
        $this->submittedAt = new DateTime($json['submitted_at']);
        $this->definition = new Definition($json['definition']);

        foreach ($json['answers'] as $answer) {
            $this->answers[] = new Answer($answer, $this->definition);
        }

        $this->hydrate($json);
    }

}