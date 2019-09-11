<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterForm extends FormRequest
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
        return  [
            'username' => 'required',
            'email' => 'required|unique:users,email|max:255',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'password' => 'required|confirmed|min:6',
            'location' => 'required',
            'employee_type' => 'required',
            'occupation' => 'required',
            'company_name' => 'required',
            'study_place' => 'required',
            'position' => 'required',
            'dev_ide' => 'required',
            'about_devcon' => 'required',
            'previous_year' => 'required',
        ];
    }
}
