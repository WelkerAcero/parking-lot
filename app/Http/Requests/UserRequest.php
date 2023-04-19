<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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

    /*     protected function prepareForValidation()
    {
        $this->merge([
            'created_by' => Auth::user()->id,
        ]);
    } */

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
                'email' => 'required', Rule::unique('users')->ignore($this->user->id),
                'password' => 'required'
            ];
        }
        if ($this->isMethod('POST')) {
            return [
                'doctype_id' => 'required',
                'ci' => 'required|max:10',
                'name' => 'required|max:20',
                'lastname' => 'nullable|max:20',
                'email' => 'required|unique:users',
                'password' => 'required',
            ];
        }
    }
}
