<?php

namespace App\Http\Requests;

use App\Models\Lead;
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('leads', 'email')->where(fn ($query) => $query
                ->where('lead_type', 'registration')
                ->whereIn('status', [Lead::STATUS_PAYMENT_PENDING, Lead::STATUS_CONVERTED]))],
            'company_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'company_field_id' => ['required', Rule::in(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'])],
            'person_role_id' => ['required', Rule::in(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'])],
            'registration_package' => ['required', Rule::in(['standard', 'vip', 'group', 'online'])],
            'billing_type' => ['required', Rule::in(['corporate', 'individual'])],
            'billing_name' => ['required', 'string', 'max:255'],
            'billing_tax_number' => ['required', 'string', 'max:50'],
            'billing_tax_office' => ['required_if:billing_type,corporate', 'nullable', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:1000'],
            'phone_country_code' => ['required', 'string', 'regex:/^\+[0-9]{1,4}$/'],
            'phone' => ['required', 'string', 'regex:/^[0-9]{6,15}$/'],
            'consent_approved' => ['accepted'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.unique' => 'This email already has an active registration.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'country.required' => 'Please select your country.',
            'company_field_id.required' => 'Please select your field of activity.',
            'company_field_id.in' => 'Please select a valid field of activity.',
            'person_role_id.required' => 'Please select your position.',
            'person_role_id.in' => 'Please select a valid position.',
            'registration_package.required' => 'Please choose a package.',
            'billing_type.required' => 'Please choose billing type.',
            'billing_name.required' => 'Billing name is required.',
            'billing_tax_number.required' => 'Tax number is required.',
            'billing_tax_office.required_if' => 'Tax office is required for corporate billing.',
            'billing_address.required' => 'Billing address is required.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number must contain only digits and be 6 to 15 characters long.',
            'phone_country_code.regex' => 'Country code format is invalid.',
            'consent_approved.accepted' => 'Consent approval is required.',
        ];
    }
}
