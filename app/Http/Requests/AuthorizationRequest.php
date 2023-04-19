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
            $customer = Customer::select('id', 'ci', 'name', 'lastname', 'status')
                ->where('ci', $this->customer_id)
                ->get()[0];
            $vehicle = Vehicle::select('id', 'l_plate')->where('customer_id', $customer->id)->get()[0];

            $this->merge([
                'l_plate' => $vehicle->l_plate,
                'customer_ci' => $customer->ci,
                'customer_name' => $customer->name . ' ' . $customer->lastname,
                'vehicle_id' => $vehicle->id,
                'authorized_by' => Auth::user()->id,
                'authorization_type' => $this->authorization_type,
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    protected function passedValidation(): void
    {
        $customer = Customer::select('id')->where('ci', $this->customer_id)->get()[0];
        $vehicle = Vehicle::select('id')->where('customer_id', $customer->id)->get()[0];
        if (isset($vehicle->id)) {
            if ($this->authorization_type === 'Entrance') {
                $status = True;
            }
            if ($this->authorization_type === 'Exit') {
                $status = False;
            }

            $customer->status = $status;
            $customer->update([$customer->status]);
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
            'l_plate' => 'required',
            'customer_ci' => 'required',
            'customer_name' => 'required',
            'vehicle_id' => 'required',
            'authorized_by' => 'required',
            'authorization_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'l_plate.required' => 'Este cliente no posee auto a su nombre - Cree un vehículo a su nombre antes de proceder',
        ];
    }
}
