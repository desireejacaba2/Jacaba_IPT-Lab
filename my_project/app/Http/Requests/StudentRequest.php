<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:student,email',
            'password' => 'required|string|min:6',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'parent_id' => 'required|exists:parent,parent_id',
            'date_of_join' => 'required|date',
            'status' => 'boolean',
            'last_login_date' => 'nullable|date',
            'last_login_ip' => 'nullable|string|max:45',
        ];
    }
}
