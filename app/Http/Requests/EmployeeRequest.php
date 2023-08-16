<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => 'required',
            "last_name" => "required",
            "email" => "required",
            "age" => "required|integer|min:1|max:120",
            "gender" => "required"
        ];
    }

    public function messages()
    {
        return [
            "first_name.required" => "We need you to enter your First Name",
            "age.max" => "Age is too high"
        ];
    }
}
