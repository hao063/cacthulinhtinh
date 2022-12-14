<?php

namespace App\Validators;

use Illuminate\Contracts\Validation\Factory;
use Prettus\Validator\LaravelValidator;

/**
 * Class FormValidator.
 */
class PostValidator extends LaravelValidator
{
    /**
     * FormValidator constructor.
     */
    public function __construct(Factory $validator)
    {
        parent::__construct($validator);

        /*
         *
         * Validator rules
         *
         */
        $this->rules = [
            BaseValidatorInterface::RULE_CREATE => [
                'name' => 'required|unique:posts',
            ],
            BaseValidatorInterface::RULE_UPDATE => [
                'name' => 'required|unique:posts,name,:id',
            ],
        ];

        /*
         *
         * Validator attributes
         *
         */
        $this->attributes = [
            'name' => 'Post',
        ];

        /*
         *
         * Validator messages
         *
         */
        $this->messages = [
            'required' => ':attribute' . __('name is empty'),
            'unique' => ':attribute' . __('name already exists'),
        ];
    }
}
