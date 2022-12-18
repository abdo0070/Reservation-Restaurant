<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TableStatus implements Rule
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
        // this to table valiadation
        return $value == 'available' || $value == 'busy';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Dont edit in html code bitch';
    }
}
