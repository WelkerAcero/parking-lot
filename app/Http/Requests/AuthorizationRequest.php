<?php

namespace App\Http\Requests;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AuthorizationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()) {
            return true;
        } else {
            return redirect($this->redirect, 403);
        }
    }


    protected function prepareForValidation()
    {
        $customer = Customer::select('id')->where('ci', $this->customer_id)->get();
        $vehicleId = Vehicle::select('id')->where('customer_id', $customer[0]->id)->get();
        $this->merge([
            'vehicle_id' => $vehicleId[0]->id,
            'authorized_by' => Auth::user()->id,
            'authorization_type' => $this->authorization_type,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vehicle_id' => 'required',
            'authorized_by' => 'required',
            'authorization_type' => 'required',
        ];
    }
}
