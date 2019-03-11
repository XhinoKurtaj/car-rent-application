<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'engine_size' => 'required|string|max:255',
            'fuel_economy' => 'required|string|max:255',
            'rent_price' => 'required|integer',
            'condition_check' => 'required|string|max:255',

        ];
    }
}
