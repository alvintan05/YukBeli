<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'gender' => 'required|in:L,P',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'telephone' => 'required|numeric|digits_between:10,15|unique:user,telephone',            
            'photo' => 'required|image|mimes:jpeg,jpg,png',
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ];
    }
}
