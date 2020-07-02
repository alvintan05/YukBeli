<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        // Cek apakah CREATE atau UPDATE
        if ($this->method() == 'PATCH') {
            $name_rules = 'required|string|unique:product,product_name,' . $this->get('id'); 
            $photo_rules = 'sometimes|nullable|image|mimes:jpeg,jpg,png';
        } else {
            $name_rules = 'required|string|unique:product,product_name';            
            $photo_rules = 'required|image|mimes:jpeg,jpg,png';
        }

        return [
            'product_name' => $name_rules,
            'description' => 'required|string',
            'price' => 'required|numeric',
            'id_category' => 'required',
            'photo' => $photo_rules,
        ];
    }
}
