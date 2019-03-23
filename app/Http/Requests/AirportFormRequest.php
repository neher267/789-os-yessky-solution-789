<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportFormRequest extends FormRequest
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
            'icao' => 'required|max:20|min:3',
            'country_id' => 'required|max:10',
            'city' => 'required|max:50|min:3',
        ];
    }
}
