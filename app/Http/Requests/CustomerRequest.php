<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
            'url' => 'http://127.0.0.1:8000/authorization/' . $this->ci,
            'created_by' => Auth::user()->id
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
            'doctype_id' => 'required',
            'ci' => 'required|max:10',
            'name' => 'required|max:20',
            'lastname' => 'nullable|max:20',
            'email' => 'required|unique:customers',
            'url' => 'required|unique:customers',
            'charge_id' => 'required',
            'created_by' => 'required',
        ];
    }
}
