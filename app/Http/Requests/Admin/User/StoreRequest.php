<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле обязательно для заполнения',
            'name.string' => 'Данные должны соответствовать строке',
            'email.required' => 'Это поле обязательно для заполнения',
            'email.email' => 'Не корректный адрес электронной почты',
            'email.unique' => 'Этот адрес электронной почты уже используется',
            'role.required' => 'Это поле обязательно для заполнения',
            'role.integer' => 'Это поле может содержать только цифры',
        ];
    }
}
