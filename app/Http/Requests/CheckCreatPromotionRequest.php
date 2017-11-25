<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckCreatPromotionRequest extends FormRequest
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

            'code' => 'string|min:6|max:6|unique:promotions',
            'discount' => 'required|integer|max:99|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'
        ];
    }
}
