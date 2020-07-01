<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            $name_rules = 'required|string|unique:category,category_name,' . $this->get('id');            
        } else {
            $name_rules = 'required|string|unique:category,category_name';            
        }

        return [
            'category_name' => $name_rules,
            'description' => 'required|string',            
        ];
    }
}
