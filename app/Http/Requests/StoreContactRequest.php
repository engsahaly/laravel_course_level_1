<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'message' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'My customized version of required message for first name field 22',
            'first_name.min' => 'My customized version of MINIMUM message for first name field 22',
        ];
    }
}
