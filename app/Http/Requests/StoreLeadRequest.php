<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeadRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('leads', 'email')],
            'company_name' => ['required', 'string', 'max:255'],
            'phone_country_code' => ['required', 'string', 'regex:/^\+[0-9]{1,4}$/'],
            'phone' => ['required', 'string', 'regex:/^[0-9]{6,15}$/'],
            'gdpr_approved' => ['accepted'],
            'kvkk_approved' => ['accepted'],
            'privacy_approved' => ['accepted'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number must contain only digits and be 6 to 15 characters long.',
            'phone_country_code.regex' => 'Country code format is invalid.',
            'gdpr_approved.accepted' => 'GDPR consent is required.',
            'kvkk_approved.accepted' => 'Local data protection consent is required.',
            'privacy_approved.accepted' => 'Privacy notice consent is required.',
        ];
    }
}
