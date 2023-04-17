<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequstRules extends FormRequest
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
        $phone_regex = '/^07[0-9]{8}$/';
        return [
            'Fname' => 'required',
            'Lname' => 'required',
            'company_id' => 'required',
            'email' => 'required|email',
            'phone' => ['required',"regex:$phone_regex"],
        ];
    }
}
