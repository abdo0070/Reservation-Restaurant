<?php

namespace App\Http\Requests;

use App\Http\Middleware\Admin;
use App\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { 
        return Admin::handleRequest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['email'] ,
            'password' => ['required',new Password] ,
        ];     
    }
 
}
