<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperatorFormRequest extends FormRequest
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
            'name' => 'required|unique:operators|max:191',
            'email' => 'nullable|email|unique:operators|max:191',
            'address_line_1' => 'required|max:191',
            'address_line_2' => 'nullable|max:191',
            'country_id' => 'required|max:5',
            'city_id' => 'nullable|max:100',
            'business_phone' => 'nullable|max:15',
        ];
    }
}
