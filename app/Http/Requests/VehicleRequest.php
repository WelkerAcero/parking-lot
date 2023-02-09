<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VehicleRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'l_plate' => 'required|max:6',
            'color' => 'required|max:10',
            'model' => 'required|max:4',
            'brand' => 'required|max:20',
            'customer_id' => 'required',
            'engine_id' => 'required',
        ];
    }
}
