<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns|max:255|unique:employees,email',
            'phone' => 'required|string|max:20',
            'marital_status' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'language' => 'nullable|string|max:255',
            'leave_days' => 'nullable|numeric',
            'skills' => 'nullable|string',
            'qualifications' => 'nullable|string',
        ];
    }
}
