<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'email' => 'required|string|email|unique:employees,email',
            'phone' => 'nullable|string',
            'marital_status' => 'nullable|in:Single,Married,Divorced,Widowed',
            'sex' => 'nullable|in:Male,Female,Other',
            'department' => 'nullable|string',
            'position' => 'nullable|string',
            'salary' => 'nullable|numeric',
            'language' => 'nullable|string',
            'skills' => 'nullable|string',
            'qualifications' => 'nullable|string',
        ];
    }
}
