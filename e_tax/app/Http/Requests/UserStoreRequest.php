<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'step' => ['nullable', 'numeric'],
            'firstname' => ['nullable', 'max:255', 'string'],
            'lastname' => ['nullable', 'max:255', 'string'],
            'mobile' => ['required', 'max:255', 'numeric'],
            'fix' => ['required', 'max:255', 'numeric'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
        ];
    }
}
