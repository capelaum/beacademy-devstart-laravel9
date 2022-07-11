<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';

        $rules = [
            'name' => 'required|string|min:3|max:100',
            'email' => [
                'required',
                'email',
                'unique:users,email,{$id},id'
            ],
            'password' => [
                'required',
                'min:6',
                'max:30'
            ],
            'image' => [
                'nullable',
                'file',
                'mimes:jpeg,png,jpg',
            ]
        ];

        if ($this->method('PUT')) {
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:30'
            ];

            $rules['email'] = [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
