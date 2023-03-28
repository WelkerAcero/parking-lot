<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VehicleRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('PUT')) {
            return [
                'l_plate' => 'required', Rule::unique('vehicles')->ignore($this->vehicle->id),
                'color' => 'required|max:10',
                'model' => 'required|max:4',
                'brand' => 'required|max:20',
                'customer_id' => 'required', Rule::unique('vehicles')->ignore($this->vehicle->id),
                'vehicle_type_id' => 'required',
            ];
        }
        if ($this->isMethod('POST')) {
            return [
                'l_plate' => 'required|max:6',
                'color' => 'required|max:10',
                'model' => 'required|max:4',
                'brand' => 'required|max:20',
                'customer_id' => 'required',
                'vehicle_type_id' => 'required',
            ];
        }
    }
}
