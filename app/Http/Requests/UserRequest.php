<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->method()=='PUT'){
            //edit form
            return[
                'fullname'  =>'required',
                'email'     =>'required|email|unique:users,email,'.$this->id,
                'password'  =>'required|min:8',
                'birthday'  =>'required',
                'phone'     =>'required|numeric',
                'photo'     =>'image|max:1000',
                'address'   =>'required',
                'role_id'   =>'required'
            ];
        } else {
            // create form
            return[
                'fullname'  =>'required',
                'email'     =>'required|email|unique:users',
                'password'  =>'required|min:8',
                'birthday'  =>'required',
                'phone'     =>'required|numeric',
                'photo'     =>'image|max:1000',
                'address'   =>'required',
                'role_id'   =>'required'
            ];

        }
    }
}
