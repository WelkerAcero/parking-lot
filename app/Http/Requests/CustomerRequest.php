<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
        $this->merge([
            'url' => Request::root() . '/authorization/' . $this->ci,
            'created_by' => Auth::user()->id,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('PUT')) {
            return [
                'doctype_id' => 'required',
                'ci' => 'required|max:10',
                'name' => 'required|max:20',
                'lastname' => 'nullable|max:20',
                'email' => 'required', Rule::unique('customers')->ignore($this->customer->id),
                'cellphone' => 'required',
                'url' => 'required', Rule::unique('customers')->ignore($this->customer->id),
                'charge_id' => 'required',
                'created_by' => 'required',
            ];
        }
        if ($this->isMethod('POST')) {
            return [
                'doctype_id' => 'required',
                'ci' => 'required|max:10',
                'name' => 'required|max:20',
                'lastname' => 'nullable|max:20',
                'email' => 'required|unique:customers',
                'cellphone' => 'required|max:10',
                'url' => 'required|unique:customers',
                'charge_id' => 'required',
                'created_by' => 'required',
            ];
        }
    }
}
