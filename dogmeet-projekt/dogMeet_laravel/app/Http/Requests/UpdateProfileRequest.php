<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ["required", "exists:users,id"],
            'firstName' => ["required", "string", "min:2", "max:30"],
            'lastName' => ["required", "string", "min:2", "max:30"],
            'phoneNumber' => ["required", "string"],
        ];
    }

    public function messages()
    {
        return [
            "user_id.required" => "A(z) :attribute kitöltése kötelező.",
            "user_id.exists" => "A(z) :attribute nem létezik.",
            "firstName.required" => "A(z) :attribute kitöltése kötelező.",
            "firstName.min" => "A(z) :attribute legalább 2 karakter hosszú legyen.",
            "firstName.max" => "A(z) :attribute legfeljebb 30 karakter lehet.",
            "lastName.required" => "A(z) :attribute kitöltése kötelező.",
            "lastName.min" => "A(z) :attribute legalább 2 karakter hosszú legyen.",
            "lastName.max" => "A(z) :attribute legfeljebb 30 karakter lehet.",
            "phoneNumber.required" => "A(z) :attribute kitöltése kötelező.",
        ];
    }

    public function attributes()
    {
        return [
            "user_id" => "felhasználó azonosító",
            "firstName" => "keresztnév",
            "lastName" => "vezetéknév",
            "phoneNumber" => "telefonszám",
        ];
    }
}
