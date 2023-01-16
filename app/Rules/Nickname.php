<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Nickname implements Rule
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
        /*
         * Правила валидации никнейма:
         * 1.Только Латинские буквы
         * 2.Числа от 0-9
         * 3.Знаки: "-","_" и "."
         * 4.Длина от 3-х до 21-го символа
         *
         */
        return !! preg_match('/^[\p{L}\d\-_.]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Разрешённые символы: Латинские буквы "-", "_" и "."';
    }
}
