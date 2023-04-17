<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequstRules extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('company');
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email,' . $id,
            'website' => 'required',
        ];

        if ($this->hasFile('logo')) {
            $rules['logo'] = 'mimes:jpeg,jpg,png|dimensions:min_width=100,min_height=100|max:3000';
        }

        return $rules;
    }
}
