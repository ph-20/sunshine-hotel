<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckEditUserRequest extends FormRequest
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
            'last_name'=>'required',
            'first_name'=>'required',
            'password'=>'required|string|min:6|confirmed',
            'phone_number'=>'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'address'=>'required',
        ];
    }
}
