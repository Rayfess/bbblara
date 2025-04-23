<?php

namespace App\Http\Requests;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return [
              'role' => ['required', Rule::in(UserRole::values())],  
            ];
        }

        return [
            'name' => ['required','min:3'],
            'username' => ['required', 'min:8', 'string', 'unique:users,username'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required','confirmed','min:6'],
            'role' => ['required', Rule::in(UserRole::values())],
        ];
    }
}
