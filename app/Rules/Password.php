<?php

namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
        $this->lengthPasses = (Str::length($value) >= 10);
        $this->uppercasePasses = (Str::lower($value) !== $value);
        $this->numericPasses = ((bool) preg_match('/[0-9]/', $value));
        $this->specialCharacterPasses = ((bool) preg_match('/[^A-Za-z0-9]/', $value));

        return ($this->lengthPasses && $this->uppercasePasses && $this->numericPasses && $this->specialCharacterPasses);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        switch (true) {
            case ! $this->uppercasePasses
                && $this->numericPasses
                && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character.';

            case ! $this->numericPasses
                && $this->uppercasePasses
                && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one number.';

            case ! $this->specialCharacterPasses
                && $this->uppercasePasses
                && $this->numericPasses:
                return 'The :attribute must be at least 10 characters and contain at least one special character.';

            case ! $this->uppercasePasses
                && ! $this->numericPasses
                && $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character and one number.';

            case ! $this->uppercasePasses
                && ! $this->specialCharacterPasses
                && $this->numericPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character and one special character.';

            case ! $this->uppercasePasses
                && ! $this->numericPasses
                && ! $this->specialCharacterPasses:
                return 'The :attribute must be at least 10 characters and contain at least one uppercase character, one number, and one special character.';

            default:
                return 'The :attribute must be at least 10 characters.';
        }
    }
    
}
