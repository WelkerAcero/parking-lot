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
        try {
            $customer = Customer::select('id', 'status')->where('ci', $this->customer_id)->get()[0];
            $vehicleId = Vehicle::select('id')->where('customer_id', $customer->id)->get()[0];

            if (isset($vehicleId->id)) {
                if ($this->authorization_type === 'Entrance') {
                    $status = True;
                }
                if ($this->authorization_type === 'Exit') {
                    $status = False;
                }

                $customer->status = $status;
                $customer->update([$customer->status]);
            }
            $this->merge([
                'vehicle_id' => $vehicleId->id,
                'authorized_by' => Auth::user()->id,
                'authorization_type' => $this->authorization_type,
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
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

    public function messages()
    {
        return [
            'vehicle_id.required' => 'Este cliente no posee auto a su nombre - Cree un vehículo a su nombre antes de proceder',
        ];
    }
}
