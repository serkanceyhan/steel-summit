<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class StoreSponsorshipLeadRequest extends StoreLeadRequest
{
    protected $errorBag = 'sponsorship';

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['email'] = ['required', 'email', 'max:255', Rule::unique('leads', 'email')->where('lead_type', 'sponsorship')];
        $rules['registration_package'] = ['nullable'];
        $rules['billing_type'] = ['nullable'];
        $rules['billing_name'] = ['nullable'];
        $rules['billing_tax_number'] = ['nullable'];
        $rules['billing_tax_office'] = ['nullable'];
        $rules['billing_address'] = ['nullable'];

        return $rules;
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return array_merge(parent::messages(), [
            'email.unique' => 'A sponsorship inquiry already exists for this email.',
        ]);
    }
}
