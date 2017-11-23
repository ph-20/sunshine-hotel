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
            'last_name' => 'required|string|min:1|max:20',
            'first_name' => 'required|string|min:1|max:20',
            'phone_number' => 'required|integer',
            'email' => 'required|string|min:1|max:100',
            'address' => 'string|min:2|max:60',
        ];
    }
}
