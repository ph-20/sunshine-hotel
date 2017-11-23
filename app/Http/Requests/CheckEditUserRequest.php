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
        $user = $this->route('user');
        return [
            'last_name' => 'string|min:1|max:20',
            'first_name' => 'string|min:1|max:20',
            'phone_number' => 'string|min:2|max:20',
            'email' => 'string|email|max:255|unique:users,email,' . $user->id,
            'address' => 'string|min:2|max:60',
        ];
    }
}
