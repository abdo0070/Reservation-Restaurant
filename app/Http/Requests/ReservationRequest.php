<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TableValidation;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    
    public function rules()
    {
        return [
            "first_name" => 'required',
            "second_name" => 'required',
            "email" => 'required|email',
            "res_date" => ['required', 'date' ,new DateBetween],
            "phone" => 'required',
            "guest_number" => 'required',
            "table_id" => 'required',            
        ];
    }
}
