<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Steel Networking Summit 2026 | Registration</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css" />
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
    <script>
        window._geoIpPromise = (async function () {
            try {
                const first = await fetch('https://ipapi.co/json/');
                if (first.ok) {
                    const data = await first.json();
                    if (data) {
                        return data;
                    }
                }
            } catch (e) {
                // no-op
            }

            try {
                const second = await fetch('https://ipwho.is/');
                if (second.ok) {
                    const data = await second.json();
                    if (data?.success !== false) {
                        return {
                            country_code: data?.country_code,
                            country_name: data?.country,
                        };
                    }
                }
            } catch (e) {
                // no-op
            }

            return null;
        })();
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        function registrationWizard() {
            return {
                step: 1,
                formData: {
                    firstName: @js(old('first_name', '')),
                    lastName: @js(old('last_name', '')),
                    email: @js(old('email', '')),
                    companyName: @js(old('company_name', '')),
                    country: @js(old('country', '')),
                    companyFieldId: @js((string) old('company_field_id', '0')),
                    personRoleId: @js((string) old('person_role_id', '0')),
                    package: @js(old('registration_package', 'standard')),
                    billingType: @js(old('billing_type', 'corporate')),
                    billingName: @js(old('billing_name', '')),
                    billingTaxNumber: @js(old('billing_tax_number', '')),
                    billingTaxOffice: @js(old('billing_tax_office', '')),
                    billingAddress: @js(old('billing_address', '')),
                    consentApproved: @js((bool) old('consent_approved')),
                },
                prices: { standard: 1050, vip: 950, group: 850, online: 150 },
                standardPrices: { standard: 1200, vip: 1100, group: 1000, online: 150 },
                packageLabels: {
                    standard: 'Individual',
                    vip: 'Corporate',
                    group: 'Global Group',
                    online: 'Online',
                },
                countryOpen: false,
                countrySearchText: '',
                countryDropdownStyle: '',
                companyFieldOpen: false,
                companyFieldSearchText: '',
                companyFieldDropdownStyle: '',
                personRoleOpen: false,
                personRoleSearchText: '',
                personRoleDropdownStyle: '',
                countries: ["Afghanistan","Albania","Algeria","Andorra","Angola","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahrain","Bangladesh","Belarus","Belgium","Bolivia","Bosnia and Herzegovina","Brazil","Bulgaria","Cambodia","Cameroon","Canada","Chile","China","Colombia","Croatia","Cuba","Cyprus","Czechia","Denmark","Ecuador","Egypt","Estonia","Ethiopia","Finland","France","Georgia","Germany","Ghana","Greece","Guatemala","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Japan","Jordan","Kazakhstan","Kenya","Korea, North","Korea, South","Kuwait","Latvia","Lebanon","Libya","Lithuania","Luxembourg","Malaysia","Mexico","Moldova","Mongolia","Montenegro","Morocco","Myanmar","Netherlands","New Zealand","Nigeria","North Macedonia","Norway","Oman","Pakistan","Palestine","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Saudi Arabia","Serbia","Singapore","Slovakia","Slovenia","South Africa","Spain","Sri Lanka","Sudan","Sweden","Switzerland","Syria","Taiwan","Thailand","Tunisia","Turkey","Ukraine","United Arab Emirates","United Kingdom","United States","Uzbekistan","Venezuela","Vietnam","Yemen","Zimbabwe"],
                companyFieldOptions: [
                    { value: '1', label: 'Crude Steel Producer' },
                    { value: '2', label: 'Rolling Mill' },
                    { value: '3', label: 'Scrap Supplier' },
                    { value: '4', label: 'Iron Ore or Coal Mining' },
                    { value: '5', label: 'Feroalloys Supplier' },
                    { value: '6', label: 'Trader' },
                    { value: '7', label: 'Tube and Pipes Supplier' },
                    { value: '8', label: 'Automotive Main and Subsidiary Industry' },
                    { value: '9', label: 'Construction / Subcontractor' },
                    { value: '10', label: 'White Household Goods' },
                    { value: '11', label: 'Panel radiators' },
                    { value: '12', label: 'Steel Service Center' },
                    { value: '13', label: 'Stainless Steel Supplier' },
                    { value: '14', label: 'Machinery Supplier' },
                    { value: '15', label: 'Logistics' },
                    { value: '16', label: 'Surveillance Company' },
                    { value: '17', label: 'Finance' },
                    { value: '26', label: 'Steel Fabricator / Cut and Bend Plant' },
                    { value: '27', label: 'Pipe / Profile Manufacturer' },
                    { value: '28', label: 'Wire / Steel Rope Producer' },
                    { value: '29', label: 'Welded Wire Mesh Producer' },
                    { value: '19', label: 'Raw Material Supplier' },
                    { value: '20', label: 'End User' },
                    { value: '21', label: 'Plant / Equipment' },
                    { value: '22', label: 'Machine Manufacturer' },
                    { value: '23', label: 'Consultancy / Analyst / Law' },
                    { value: '24', label: 'Association' },
                    { value: '30', label: 'Nuts and Bolts Manufacturer' },
                    { value: '31', label: 'Steel Mesh Manufacturer' },
                    { value: '25', label: 'Other' },
                ],
                personRoleOptions: [
                    { value: '19', label: 'Assistant' },
                    { value: '6', label: 'Assistant General Manager' },
                    { value: '14', label: 'Assistant Manager' },
                    { value: '18', label: 'Assistant Specialist' },
                    { value: '2', label: 'Board Member / Member of the Board' },
                    { value: '15', label: 'Consultant' },
                    { value: '11', label: 'Coordinator' },
                    { value: '8', label: 'Deputy Director' },
                    { value: '7', label: 'Director' },
                    { value: '13', label: 'Executive' },
                    { value: '5', label: 'General Manager' },
                    { value: '10', label: 'Group Manager' },
                    { value: '12', label: 'Manager / Department Head' },
                    { value: '1', label: 'Owner / Founder / Partner' },
                    { value: '3', label: 'President / Chairman' },
                    { value: '9', label: 'Senior Manager' },
                    { value: '17', label: 'Specialist' },
                    { value: '16', label: 'Supervisor' },
                    { value: '4', label: 'Vice President' },
                    { value: '20', label: 'Other' },
                ],
                get filteredCountries() {
                    if (!this.countrySearchText) { return this.countries; }
                    return this.countries.filter(c => c.toLowerCase().includes(this.countrySearchText.toLowerCase()));
                },
                get filteredCompanyFieldOptions() {
                    if (!this.companyFieldSearchText) { return this.companyFieldOptions; }
                    return this.companyFieldOptions.filter((o) => o.label.toLowerCase().includes(this.companyFieldSearchText.toLowerCase()));
                },
                get filteredPersonRoleOptions() {
                    if (!this.personRoleSearchText) { return this.personRoleOptions; }
                    return this.personRoleOptions.filter((o) => o.label.toLowerCase().includes(this.personRoleSearchText.toLowerCase()));
                },
                get selectedCompanyFieldLabel() {
                    const found = this.companyFieldOptions.find((o) => o.value === this.formData.companyFieldId);
                    return found ? found.label : '--- Select ---';
                },
                get selectedPersonRoleLabel() {
                    const found = this.personRoleOptions.find((o) => o.value === this.formData.personRoleId);
                    return found ? found.label : '--- Select ---';
                },
                normalizeCountryName(name) {
                    return (name || '')
                        .toLowerCase()
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '')
                        .replace(/[^a-z0-9 ]/g, ' ')
                        .replace(/\s+/g, ' ')
                        .trim();
                },
                resolveCountryFromGeo(data) {
                    if (!data) {
                        return null;
                    }

                    const aliases = {
                        'south korea': 'Korea, South',
                        'north korea': 'Korea, North',
                        'turkiye': 'Turkey',
                        'czech republic': 'Czechia',
                        'russian federation': 'Russia',
                    };

                    const code = (data.country_code || '').toUpperCase();
                    if (code && typeof Intl !== 'undefined' && Intl.DisplayNames) {
                        const nameFromCode = new Intl.DisplayNames(['en'], { type: 'region' }).of(code);
                        if (nameFromCode && this.countries.includes(nameFromCode)) {
                            return nameFromCode;
                        }

                        const normalizedFromCode = this.normalizeCountryName(nameFromCode);
                        if (aliases[normalizedFromCode] && this.countries.includes(aliases[normalizedFromCode])) {
                            return aliases[normalizedFromCode];
                        }
                    }

                    const normalizedFromApi = this.normalizeCountryName(data.country_name);
                    if (aliases[normalizedFromApi] && this.countries.includes(aliases[normalizedFromApi])) {
                        return aliases[normalizedFromApi];
                    }

                    const direct = this.countries.find((country) => this.normalizeCountryName(country) === normalizedFromApi);
                    return direct || null;
                },
                async init() {
                    if (!this.formData.country && window._geoIpPromise) {
                        const data = await window._geoIpPromise;
                        const resolvedCountry = this.resolveCountryFromGeo(data);
                        if (resolvedCountry) {
                            this.formData.country = resolvedCountry;
                        }
                    }
                },
                selectCountry(c) {
                    this.formData.country = c;
                    this.countryOpen = false;
                    this.countrySearchText = '';
                },
                openCountryDropdown(eventOrEl) {
                    if (this.countryOpen) {
                        this.countryOpen = false;
                        return;
                    }
                    const trigger = eventOrEl?.currentTarget || eventOrEl || document.getElementById('countryTriggerBtn');
                    if (trigger) {
                        const rect = trigger.getBoundingClientRect();
                        this.countryDropdownStyle = 'position:fixed;top:' + (rect.bottom + 4) + 'px;left:' + rect.left + 'px;width:' + rect.width + 'px;z-index:9999';
                    }
                    this.countryOpen = true;
                },
                selectCompanyField(value) {
                    this.formData.companyFieldId = value;
                    this.companyFieldOpen = false;
                    this.companyFieldSearchText = '';
                },
                openCompanyFieldDropdown(eventOrEl) {
                    if (this.companyFieldOpen) {
                        this.companyFieldOpen = false;
                        return;
                    }
                    const trigger = eventOrEl?.currentTarget || eventOrEl || document.getElementById('companyFieldTriggerBtn');
                    if (trigger) {
                        const rect = trigger.getBoundingClientRect();
                        this.companyFieldDropdownStyle = 'position:fixed;top:' + (rect.bottom + 4) + 'px;left:' + rect.left + 'px;width:' + rect.width + 'px;z-index:9999';
                    }
                    this.companyFieldOpen = true;
                },
                selectPersonRole(value) {
                    this.formData.personRoleId = value;
                    this.personRoleOpen = false;
                    this.personRoleSearchText = '';
                },
                openPersonRoleDropdown(eventOrEl) {
                    if (this.personRoleOpen) {
                        this.personRoleOpen = false;
                        return;
                    }
                    const trigger = eventOrEl?.currentTarget || eventOrEl || document.getElementById('personRoleTriggerBtn');
                    if (trigger) {
                        const rect = trigger.getBoundingClientRect();
                        this.personRoleDropdownStyle = 'position:fixed;top:' + (rect.bottom + 4) + 'px;left:' + rect.left + 'px;width:' + rect.width + 'px;z-index:9999';
                    }
                    this.personRoleOpen = true;
                },
                savePartialLead() {
                    const iti = window._wizardIti;
                    const phoneData = iti ? iti.getSelectedCountryData() : null;
                    const dialCode = phoneData && phoneData.dialCode ? phoneData.dialCode : '90';
                    const phoneCode = '+' + dialCode;
                    const phone = iti ? iti.getNumber().replace(/\D/g, '') : '';
                    const token = document.querySelector('input[name="_token"]')?.value || '';
                    fetch('/register/partial', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': token, 'Accept': 'application/json' },
                        body: JSON.stringify({
                            first_name: this.formData.firstName,
                            last_name: this.formData.lastName,
                            email: this.formData.email,
                            company_name: this.formData.companyName,
                            country: this.formData.country,
                            phone_country_code: phoneCode,
                            phone: phone,
                        }),
                    }).catch(() => {});
                },
                nextStep() {
                    const currentSections = document.querySelectorAll('[data-step="' + this.step + '"]');
                    if (currentSections.length === 0) { return; }
                    if (this.step === 2 && !this.formData.country) {
                        this.openCountryDropdown(document.getElementById('countryTriggerBtn'));
                        return;
                    }
                    if (this.step === 2 && (this.formData.companyFieldId === '0' || this.formData.personRoleId === '0')) {
                        const companyField = document.getElementById('companyFieldIdInput');
                        const personRole = document.getElementById('personRoleIdInput');
                        if (companyField && this.formData.companyFieldId === '0') {
                            companyField.setCustomValidity('Please select your field of activity.');
                            companyField.reportValidity();
                            companyField.setCustomValidity('');
                            return;
                        }
                        if (personRole && this.formData.personRoleId === '0') {
                            personRole.setCustomValidity('Please select your position.');
                            personRole.reportValidity();
                            personRole.setCustomValidity('');
                            return;
                        }
                    }
                    for (const section of currentSections) {
                        const fields = section.querySelectorAll('input[required]:not([type="hidden"]), select[required], textarea[required]');
                        for (const f of fields) {
                            if (!f.checkValidity()) { f.reportValidity(); return; }
                        }
                    }
                    if (this.step === 2) { this.savePartialLead(); }
                    if (this.step < 4) { this.step++; }
                },
                previousStep() {
                    if (this.step > 1) { this.step--; }
                },
                submitWizard() {
                    if (this.step < 4) { this.nextStep(); return; }
                    const iti = window._wizardIti;
                    if (iti) {
                        const phoneData = iti.getSelectedCountryData();
                        const dialCode = phoneData && phoneData.dialCode ? phoneData.dialCode : '90';
                        const el = document.getElementById('wizard_phone_country_code');
                        const pe = document.getElementById('wizard_phone_pure');
                        if (el) { el.value = '+' + dialCode; }
                        if (pe) { pe.value = iti.getNumber().replace(/\D/g, ''); }
                    }
                    const form = document.getElementById('registration-wizard-form');
                    if (form) { form.requestSubmit(); }
                },
            };
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        "brand-navy": "#0b1220",
                        "brand-navy-soft": "#1e293b",
                        "brand-green": "#2dd4bf",
                        "brand-green-dark": "#0f4c5c",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        serif: ["Playfair Display", "serif"],
                    },
                },
            },
        };
    </script>

    <style>
        [x-cloak] { display: none !important; }
        .glass {
            background: rgba(30, 41, 59, 0.72);
            border: 1px solid rgba(148, 163, 184, 0.18);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        .reg-iti-wrapper .iti { width: 100%; }
        .reg-iti-wrapper { border-bottom: 1px solid rgba(255, 255, 255, 0.2); transition: border-color 0.2s ease; }
        .reg-iti-wrapper:focus-within { border-bottom-color: #2dd4bf; }
        .reg-iti-wrapper .iti__tel-input {
            background: transparent !important;
            border: none !important;
            color: white !important;
            width: 100%;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }
        .reg-iti-wrapper .iti__tel-input:focus { outline: none !important; box-shadow: none !important; }
        .iti__country-list { background-color: #020617 !important; border: 1px solid rgba(255,255,255,0.1) !important; color: #fff !important; border-radius: 0.5rem !important; }
        .iti__country.iti__highlight { background-color: rgba(255,255,255,0.1) !important; }
        .iti__search-input { background-color: #0f172a !important; color: #fff !important; border: 1px solid rgba(255,255,255,0.2) !important; border-radius: 0.25rem !important; padding: 8px !important; margin: 4px !important; width: calc(100% - 8px) !important; }
        .iti__selected-flag { background-color: transparent !important; padding-left: 0 !important; padding-right: 8px !important; }
        .iti__flag-container { padding-bottom: 2px !important; }

        /* Improve readability for small-size muted texts site-wide without changing font weight */
        :where(.text-xs, .text-sm, .text-\[9px\], .text-\[10px\], .text-\[11px\], .text-\[12px\]).text-slate-500 {
            color: rgb(148 163 184);
        }

        :where(.text-xs, .text-sm, .text-\[9px\], .text-\[10px\], .text-\[11px\], .text-\[12px\]).text-slate-400 {
            color: rgb(203 213 225);
        }

        :where(.text-xs, .text-sm, .text-\[9px\], .text-\[10px\], .text-\[11px\], .text-\[12px\]).text-slate-300 {
            color: rgb(226 232 240);
        }

        /* Keep browser autofill visually consistent with manual typing */
        #registration-wizard-form input:-webkit-autofill,
        #registration-wizard-form input:-webkit-autofill:hover,
        #registration-wizard-form input:-webkit-autofill:focus,
        #registration-wizard-form textarea:-webkit-autofill,
        #registration-wizard-form textarea:-webkit-autofill:hover,
        #registration-wizard-form textarea:-webkit-autofill:focus,
        #registration-wizard-form select:-webkit-autofill,
        #registration-wizard-form select:-webkit-autofill:hover,
        #registration-wizard-form select:-webkit-autofill:focus {
            -webkit-text-fill-color: #ffffff !important;
            caret-color: #ffffff !important;
            border-radius: 0 !important;
            -webkit-box-shadow: 0 0 0 1000px #020617 inset !important;
            box-shadow: 0 0 0 1000px #020617 inset !important;
            transition: background-color 9999s ease-out 0s;
        }

        #registration-wizard-form input:-moz-autofill,
        #registration-wizard-form textarea:-moz-autofill,
        #registration-wizard-form select:-moz-autofill {
            color: #ffffff !important;
            caret-color: #ffffff !important;
            box-shadow: 0 0 0 1000px #020617 inset !important;
        }
    </style>
</head>

<body class="bg-brand-navy text-slate-100 min-h-screen font-sans">
    <nav class="sticky top-0 z-40 border-b border-white/10 bg-brand-navy/90 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center">
                <img alt="Steel Networking Summits" class="h-12 w-auto object-contain"
                    src="{{ asset('images/steel-networking-logo-main.webp') }}" />
            </a>
            <a href="{{ url('/') }}"
                class="inline-flex items-center rounded-full border border-white/20 px-5 py-2 text-xs uppercase tracking-[0.2em] font-semibold hover:bg-white/10 transition-colors">
                Back to Home
            </a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-12 md:py-16" x-data="registrationWizard()">
        <div class="glass rounded-3xl overflow-hidden shadow-2xl shadow-black/30">
            <div class="p-5 md:p-8 border-b border-white/10">
                <div class="md:hidden flex items-center justify-between gap-2 rounded-xl border border-white/10 bg-white/[0.03] px-3 py-2">
                    <span class="text-[11px] uppercase tracking-[0.16em] text-slate-400">Step <span x-text="step"></span> / 4</span>
                    <span class="text-xs font-semibold text-brand-green"
                        x-text="['Choose Your Package', 'Contact & Personal', 'Billing Details', 'Payment & Confirmation'][step - 1]"></span>
                </div>

                <div class="relative max-w-3xl mx-auto justify-between items-center hidden md:flex">
                    <div class="absolute left-0 top-[18px] h-px w-full bg-white/10"></div>
                    <div class="absolute left-0 top-[18px] h-px bg-brand-green transition-all duration-500"
                        :style="'width: ' + (((step - 1) / 3) * 100) + '%'"></div>
                    <template x-for="(label, index) in ['Package', 'Contact', 'Billing', 'Payment']" :key="label">
                        <div class="relative z-10 flex flex-col items-center gap-1">
                            <div class="h-9 w-9 rounded-full border flex items-center justify-center text-xs font-bold transition-all"
                                :class="step > index + 1 ? 'bg-brand-green border-brand-green text-brand-navy' : (step === index + 1 ? 'bg-brand-green/20 border-brand-green text-brand-green' : 'bg-brand-navy-soft border-white/15 text-slate-400')">
                                <span x-show="step <= index + 1" x-text="index + 1"></span>
                                <span x-show="step > index + 1">&#10003;</span>
                            </div>
                            <span class="text-[9px] uppercase tracking-[0.14em]"
                                :class="step === index + 1 ? 'text-brand-green font-semibold' : 'text-slate-500'"
                                x-text="label"></span>
                        </div>
                    </template>
                </div>
            </div>

            <div class="p-6 md:p-10">
                <form id="registration-wizard-form" action="/register" method="POST" class="space-y-8">
                    @csrf

                    <input type="hidden" name="registration_package" :value="formData.package">
                    <input type="hidden" name="billing_type" :value="formData.billingType">
                    <input type="hidden" name="country" :value="formData.country">
                    <input type="hidden" name="phone_country_code" id="wizard_phone_country_code" value="+90">
                    <input type="hidden" name="phone" id="wizard_phone_pure">

                    @if (session('status'))
                        <div class="rounded-xl border border-emerald-300/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-100">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="rounded-xl border border-rose-300/30 bg-rose-500/10 px-4 py-3 text-sm text-rose-100">
                            <ul class="space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Step 2: Contact Information --}}
                    <section data-step="2" x-show="step === 2"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="space-y-8">
                        <h2 class="hidden md:block font-serif text-3xl md:text-4xl text-white">Contact Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="relative z-0 w-full group">
                                <input name="first_name" type="text" x-model="formData.firstName" id="reg_first_name"
                                    class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-brand-green peer transition-colors"
                                    placeholder=" " required />
                                <label for="reg_first_name"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-brand-green peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                            </div>
                            <div class="relative z-0 w-full group">
                                <input name="last_name" type="text" x-model="formData.lastName" id="reg_last_name"
                                    class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-brand-green peer transition-colors"
                                    placeholder=" " required />
                                <label for="reg_last_name"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-brand-green peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
                            </div>
                            <div class="relative z-0 w-full group">
                                <input name="email" type="email" x-model="formData.email" id="reg_email"
                                    class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-brand-green peer transition-colors"
                                    placeholder=" " required />
                                <label for="reg_email"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-brand-green peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Work Email</label>
                            </div>
                            <div class="relative z-0 w-full group">
                                <input name="company_name" type="text" x-model="formData.companyName" id="reg_company"
                                    class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-brand-green peer transition-colors"
                                    placeholder=" " required />
                                <label for="reg_company"
                                    class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-brand-green peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organization / Company</label>
                            </div>

                            {{-- Country searchable dropdown --}}
                            <div class="relative w-full" @click.away="countryOpen = false" @scroll.window.passive="countryOpen = false" @resize.window="countryOpen = false">
                                <label class="block text-xs uppercase tracking-[0.2em] text-slate-500 font-bold mb-1">Country</label>
                                <div @click="openCountryDropdown($event)" id="countryTriggerBtn"
                                    class="block py-3 px-0 w-full text-base border-0 border-b appearance-none cursor-pointer flex justify-between items-center transition-colors"
                                    :class="countryOpen ? 'border-brand-green' : 'border-white/20'">
                                    <span x-text="formData.country || 'Select Country'" :class="{'text-slate-500': !formData.country, 'text-white': formData.country}"></span>
                                    <svg class="w-4 h-4 text-slate-400 transition-transform flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" :class="{'rotate-180': countryOpen}">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <template x-teleport="body">
                                    <div x-show="countryOpen" x-cloak x-transition.opacity
                                        class="max-h-64 overflow-y-auto bg-slate-900 border border-white/10 rounded-xl shadow-2xl scrollbar-hide"
                                        :style="countryDropdownStyle">
                                        <div class="sticky top-0 bg-slate-900 p-3 border-b border-white/5">
                                            <input x-model="countrySearchText" type="text" placeholder="Search country..."
                                                class="w-full text-sm bg-slate-800 border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-brand-green"
                                                @click.stop>
                                        </div>
                                        <ul class="py-1">
                                            <template x-for="c in filteredCountries" :key="c">
                                                <li @click="selectCountry(c)"
                                                    class="px-4 py-2.5 cursor-pointer text-sm text-slate-300 hover:bg-white/5 transition-colors"
                                                    x-text="c"
                                                    :class="{'bg-white/10 text-white font-bold': formData.country === c}"></li>
                                            </template>
                                            <li x-show="filteredCountries.length === 0"
                                                class="px-4 py-3 text-sm text-slate-500 text-center">No results found</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>

                            {{-- Phone with ITI --}}
                            <div class="relative z-0 w-full reg-iti-wrapper">
                                <label class="block text-xs uppercase tracking-[0.2em] text-slate-500 font-bold mb-1">Phone Number</label>
                                <input type="tel" id="wizard_phone_full"
                                    class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-brand-green"
                                    required />
                            </div>
                        </div>
                    </section>

                    {{-- Step 2: Personal Details (Merged) --}}
                    <section data-step="2" x-cloak x-show="step === 2"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="space-y-8">
                        <h2 class="hidden md:block font-serif text-3xl md:text-4xl text-white">Personal Details</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="relative w-full" @click.away="companyFieldOpen = false" @scroll.window.passive="companyFieldOpen = false" @resize.window="companyFieldOpen = false">
                                <label class="block text-xs uppercase tracking-[0.2em] text-slate-500 font-bold mb-2">Field of Activity</label>
                                <div id="companyFieldTriggerBtn" @click="openCompanyFieldDropdown($event)"
                                    class="block py-3 px-0 w-full text-base border-0 border-b appearance-none cursor-pointer flex justify-between items-center transition-colors"
                                    :class="companyFieldOpen ? 'border-brand-green' : 'border-white/20'">
                                    <span x-text="selectedCompanyFieldLabel" :class="{'text-slate-500': formData.companyFieldId === '0', 'text-white': formData.companyFieldId !== '0'}"></span>
                                    <svg class="w-4 h-4 text-slate-400 transition-transform flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" :class="{'rotate-180': companyFieldOpen}">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <input id="companyFieldIdInput" type="hidden" name="company_field_id" :value="formData.companyFieldId">
                                <template x-teleport="body">
                                    <div x-show="companyFieldOpen" x-cloak x-transition.opacity
                                        class="max-h-64 overflow-y-auto bg-slate-900 border border-white/10 rounded-xl shadow-2xl scrollbar-hide"
                                        :style="companyFieldDropdownStyle">
                                        <div class="sticky top-0 bg-slate-900 p-3 border-b border-white/5">
                                            <input x-model="companyFieldSearchText" type="text" placeholder="Search field..."
                                                class="w-full text-sm bg-slate-800 border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-brand-green"
                                                @click.stop>
                                        </div>
                                        <ul class="py-1">
                                            <template x-for="option in filteredCompanyFieldOptions" :key="option.value">
                                                <li @click="selectCompanyField(option.value)"
                                                    class="px-4 py-2.5 cursor-pointer text-sm text-slate-300 hover:bg-white/5 transition-colors"
                                                    x-text="option.label"
                                                    :class="{'bg-white/10 text-white font-bold': formData.companyFieldId === option.value}"></li>
                                            </template>
                                            <li x-show="filteredCompanyFieldOptions.length === 0"
                                                class="px-4 py-3 text-sm text-slate-500 text-center">No results found</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>
                            <div class="relative w-full" @click.away="personRoleOpen = false" @scroll.window.passive="personRoleOpen = false" @resize.window="personRoleOpen = false">
                                <label class="block text-xs uppercase tracking-[0.2em] text-slate-500 font-bold mb-2">Position</label>
                                <div id="personRoleTriggerBtn" @click="openPersonRoleDropdown($event)"
                                    class="block py-3 px-0 w-full text-base border-0 border-b appearance-none cursor-pointer flex justify-between items-center transition-colors"
                                    :class="personRoleOpen ? 'border-brand-green' : 'border-white/20'">
                                    <span x-text="selectedPersonRoleLabel" :class="{'text-slate-500': formData.personRoleId === '0', 'text-white': formData.personRoleId !== '0'}"></span>
                                    <svg class="w-4 h-4 text-slate-400 transition-transform flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" :class="{'rotate-180': personRoleOpen}">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <input id="personRoleIdInput" type="hidden" name="person_role_id" :value="formData.personRoleId">
                                <template x-teleport="body">
                                    <div x-show="personRoleOpen" x-cloak x-transition.opacity
                                        class="max-h-64 overflow-y-auto bg-slate-900 border border-white/10 rounded-xl shadow-2xl scrollbar-hide"
                                        :style="personRoleDropdownStyle">
                                        <div class="sticky top-0 bg-slate-900 p-3 border-b border-white/5">
                                            <input x-model="personRoleSearchText" type="text" placeholder="Search position..."
                                                class="w-full text-sm bg-slate-800 border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-brand-green"
                                                @click.stop>
                                        </div>
                                        <ul class="py-1">
                                            <template x-for="option in filteredPersonRoleOptions" :key="option.value">
                                                <li @click="selectPersonRole(option.value)"
                                                    class="px-4 py-2.5 cursor-pointer text-sm text-slate-300 hover:bg-white/5 transition-colors"
                                                    x-text="option.label"
                                                    :class="{'bg-white/10 text-white font-bold': formData.personRoleId === option.value}"></li>
                                            </template>
                                            <li x-show="filteredPersonRoleOptions.length === 0"
                                                class="px-4 py-3 text-sm text-slate-500 text-center">No results found</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </section>

                    {{-- Step 1: Package --}}
                    <section data-step="1" x-cloak x-show="step === 1"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="space-y-8">
                        <h2 class="hidden md:block font-serif text-3xl md:text-4xl text-white">Choose Your Package</h2>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <button type="button" class="text-left rounded-[2rem] p-7 border transition-all bg-brand-navy-soft"
                                :class="formData.package === 'standard' ? 'border-[3px] border-brand-green bg-brand-green/10 shadow-[0_0_0_1px_rgba(45,212,191,0.35)] shadow-brand-green/20' : 'border-white/10 hover:border-white/20'"
                                @click="formData.package = 'standard'">
                                <span class="text-[11px] text-brand-green font-bold uppercase tracking-widest block mb-4">1 Participant</span>
                                <h3 class="text-4xl font-serif text-white mb-2">Individual</h3>
                                <p class="text-slate-500 text-sm italic mb-4">Single delegate access</p>
                                <p class="text-[11px] text-slate-300 font-semibold uppercase tracking-[0.18em] mb-2">Standard Fee</p>
                                <div class="flex items-baseline gap-2 mb-4">
                                    <span class="text-4xl font-bold text-slate-400 tracking-tighter line-through decoration-2">&#8364;<span x-text="standardPrices.standard"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                                <div class="inline-flex items-center gap-1.5 mb-3 bg-brand-green/10 border border-brand-green/20 rounded-full px-3 py-1">
                                    <span class="text-[10px] text-brand-green font-bold uppercase tracking-widest">Early Bird &mdash; until 15 Jul 2026</span>
                                </div>
                                <div class="flex items-baseline gap-2 mb-8">
                                    <span class="text-5xl font-bold text-white tracking-tighter">&#8364;<span x-text="prices.standard"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                            </button>

                            <button type="button" class="text-left rounded-[2rem] p-7 border transition-all bg-brand-navy-soft relative"
                                :class="formData.package === 'vip' ? 'border-[3px] border-brand-green bg-brand-green/10 shadow-[0_0_0_1px_rgba(45,212,191,0.35)] shadow-brand-green/20' : 'border-[#123e4a]/60 hover:border-[#123e4a]'"
                                @click="formData.package = 'vip'">
                                <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#123e4a] text-white text-[10px] font-black uppercase tracking-wider px-4 py-1 rounded-full">Most Popular</span>
                                <span class="text-[11px] text-brand-green font-bold uppercase tracking-widest block mb-4">2&ndash;4 Participants</span>
                                <h3 class="text-4xl font-serif text-white mb-2">Corporate</h3>
                                <p class="text-slate-500 text-sm italic mb-4">2&ndash;4 delegate delegation</p>
                                <p class="text-[11px] text-slate-300 font-semibold uppercase tracking-[0.18em] mb-2">Standard Fee</p>
                                <div class="flex items-baseline gap-2 mb-4">
                                    <span class="text-4xl font-bold text-slate-400 tracking-tighter line-through decoration-2">&#8364;<span x-text="standardPrices.vip"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                                <div class="inline-flex items-center gap-1.5 mb-3 bg-brand-green/10 border border-brand-green/20 rounded-full px-3 py-1">
                                    <span class="text-[10px] text-brand-green font-bold uppercase tracking-widest">Early Bird &mdash; until 15 Jul 2026</span>
                                </div>
                                <div class="flex items-baseline gap-2 mb-8">
                                    <span class="text-5xl font-bold text-white tracking-tighter">&#8364;<span x-text="prices.vip"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                            </button>

                            <button type="button" class="text-left rounded-[2rem] p-7 border transition-all bg-brand-navy-soft"
                                :class="formData.package === 'group' ? 'border-[3px] border-brand-green bg-brand-green/10 shadow-[0_0_0_1px_rgba(45,212,191,0.35)] shadow-brand-green/20' : 'border-white/10 hover:border-white/20'"
                                @click="formData.package = 'group'">
                                <span class="text-[11px] text-brand-green font-bold uppercase tracking-widest block mb-4">5+ Participants</span>
                                <h3 class="text-4xl font-serif text-white mb-2">Global Group</h3>
                                <p class="text-slate-500 text-sm italic mb-4">5+ large delegation</p>
                                <p class="text-[11px] text-slate-300 font-semibold uppercase tracking-[0.18em] mb-2">Standard Fee</p>
                                <div class="flex items-baseline gap-2 mb-4">
                                    <span class="text-4xl font-bold text-slate-400 tracking-tighter line-through decoration-2">&#8364;<span x-text="standardPrices.group"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                                <div class="inline-flex items-center gap-1.5 mb-3 bg-brand-green/10 border border-brand-green/20 rounded-full px-3 py-1">
                                    <span class="text-[10px] text-brand-green font-bold uppercase tracking-widest">Early Bird &mdash; until 15 Jul 2026</span>
                                </div>
                                <div class="flex items-baseline gap-2 mb-8">
                                    <span class="text-5xl font-bold text-white tracking-tighter">&#8364;<span x-text="prices.group"></span></span>
                                    <span class="text-xs text-slate-300 uppercase tracking-widest">/ person</span>
                                </div>
                            </button>
                        </div>
                    </section>

                    {{-- Step 3: Billing --}}
                    <section data-step="3" x-cloak x-show="step === 3"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="space-y-8">
                        <h2 class="hidden md:block font-serif text-3xl md:text-4xl text-white">Billing Details</h2>
                        <div class="inline-flex rounded-full bg-brand-navy-soft border border-white/10 p-1">
                            <button type="button" class="px-5 py-2 rounded-full text-sm"
                                :class="formData.billingType === 'corporate' ? 'bg-brand-green text-brand-navy font-semibold' : 'text-slate-400'"
                                @click="formData.billingType = 'corporate'">Corporate</button>
                            <button type="button" class="px-5 py-2 rounded-full text-sm"
                                :class="formData.billingType === 'individual' ? 'bg-brand-green text-brand-navy font-semibold' : 'text-slate-400'"
                                @click="formData.billingType = 'individual'">Individual</button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input name="billing_name" x-model="formData.billingName"
                                class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                :placeholder="formData.billingType === 'corporate' ? 'Company Title' : 'Full Name'" type="text" required />
                            <input name="billing_tax_number" x-model="formData.billingTaxNumber"
                                class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                :placeholder="formData.billingType === 'corporate' ? 'Tax Number' : 'National ID Number'" type="text" required />
                            <input name="billing_tax_office" x-model="formData.billingTaxOffice"
                                x-show="formData.billingType === 'corporate'"
                                :required="formData.billingType === 'corporate'"
                                class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                placeholder="Tax Office" type="text" />
                            <input name="billing_address" x-model="formData.billingAddress"
                                class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                placeholder="Billing Address" type="text" required />
                        </div>
                    </section>

                    {{-- Step 4: Payment & Confirmation --}}
                    <section data-step="4" x-cloak x-show="step === 4"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-400"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-6"
                        class="space-y-8">
                        <h2 class="hidden md:block font-serif text-3xl md:text-4xl text-white">Payment &amp; Confirmation</h2>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <div class="rounded-2xl border border-white/10 p-6 bg-brand-navy-soft space-y-5">
                                <input class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                    placeholder="Card Holder" type="text" />
                                <input class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                    placeholder="Card Number" type="text" />
                                <div class="grid grid-cols-2 gap-6">
                                    <input class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                        placeholder="MM/YY" type="text" />
                                    <input class="bg-transparent border-0 border-b border-white/20 focus:border-brand-green focus:ring-0"
                                        placeholder="CVV" type="password" />
                                </div>
                            </div>
                            <div class="rounded-2xl border border-white/10 p-6 bg-brand-navy-soft">
                                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-green mb-6">Order Summary</h3>
                                <div class="flex items-center justify-between text-sm mb-3">
                                    <span class="text-slate-400">Package</span>
                                    <span class="text-white" x-text="packageLabels[formData.package] ?? formData.package"></span>
                                </div>
                                <div class="flex items-center justify-between text-sm mb-3">
                                    <span class="text-slate-400">Subtotal</span>
                                    <span class="text-white">&#8364;<span x-text="prices[formData.package]"></span></span>
                                </div>
                                <div class="flex items-center justify-between text-sm mb-6">
                                    <span class="text-slate-400">VAT (20%)</span>
                                    <span class="text-white">&#8364;<span x-text="(prices[formData.package] * 0.2).toFixed(0)"></span></span>
                                </div>
                                <div class="border-t border-white/10 pt-4 flex items-center justify-between">
                                    <span class="text-slate-300">Total</span>
                                    <span class="text-2xl font-semibold text-brand-green">&#8364;<span
                                            x-text="(prices[formData.package] * 1.2).toFixed(0)"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-white/10 p-6 bg-brand-navy-soft space-y-4 text-slate-300">
                            <label class="flex items-start gap-3">
                                <input name="consent_approved" value="1" x-model="formData.consentApproved" required type="checkbox"
                                    class="mt-1 rounded border-white/20 bg-transparent text-brand-green focus:ring-brand-green" />
                                <span>I have read and accept the Privacy Policy and data processing terms.</span>
                            </label>
                            <label class="flex items-start gap-3">
                                <input type="checkbox" class="mt-1 rounded border-white/20 bg-transparent text-brand-green focus:ring-brand-green" />
                                <span>I accept the Terms &amp; Conditions.</span>
                            </label>
                            <label class="flex items-start gap-3">
                                <input type="checkbox" class="mt-1 rounded border-white/20 bg-transparent text-brand-green focus:ring-brand-green" />
                                <span>I allow my name to appear in attendee listings.</span>
                            </label>
                        </div>
                    </section>

                    <div class="mt-10 flex items-center justify-between">
                        <button type="button" x-show="step > 1" @click="previousStep()"
                            class="px-6 py-3 rounded-full border border-white/15 text-slate-300 hover:text-white hover:bg-white/5 transition-colors">
                            Back
                        </button>
                        <div x-show="step === 1" class="w-20"></div>
                        <button type="button" @click="submitWizard()"
                            class="ml-auto px-8 py-3 rounded-full bg-brand-green text-brand-navy font-bold uppercase tracking-[0.15em] hover:bg-brand-green-dark hover:text-white transition-colors">
                            <span x-text="step < 4 ? 'Continue' : 'Complete Registration'"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-brand-navy pt-14 pb-10 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img alt="Steel Networking Summits" class="h-10 w-auto object-contain"
                    src="{{ asset('images/steel-networking-logo-footer.webp') }}" />
                <p class="text-slate-400 text-sm mt-4">The premier networking event for the global iron and steel
                    community.</p>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Explore</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-400 hover:text-white text-sm transition-colors" href="{{ url('/#main') }}">Main</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm transition-colors" href="{{ url('/#agenda') }}">Agenda</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm transition-colors" href="{{ url('/#sponsorship') }}">Sponsorship</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-400 hover:text-white text-sm transition-colors" href="#">Privacy Policy</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm transition-colors" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Contact Us</h4>
                <p class="text-slate-400 text-sm">info@networkingsummits.com</p>
                <p class="text-slate-400 text-sm mt-2">event@networkingsummits.com</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const wizardPhoneInput = document.getElementById('wizard_phone_full');
            if (!wizardPhoneInput) { return; }

            window._wizardIti = window.intlTelInput(wizardPhoneInput, {
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js',
                initialCountry: 'auto',
                geoIpLookup: function (callback) {
                    window._geoIpPromise
                        .then(function (data) { callback(data?.country_code || 'us'); })
                        .catch(function () { callback('us'); });
                },
                separateDialCode: true,
            });

            const oldPhone = @js(old('phone', ''));
            if (oldPhone) {
                window._wizardIti.setNumber(oldPhone);
            }

            wizardPhoneInput.addEventListener('countrychange', function () {
                const el = document.getElementById('wizard_phone_country_code');
                if (el) {
                    const phoneData = window._wizardIti.getSelectedCountryData();
                    const dialCode = phoneData && phoneData.dialCode ? phoneData.dialCode : '90';
                    el.value = '+' + dialCode;
                }
            });

            const form = document.getElementById('registration-wizard-form');
            if (form) {
                form.addEventListener('submit', function () {
                    const num = window._wizardIti.getNumber().replace(/\D/g, '');
                    const phoneData = window._wizardIti.getSelectedCountryData();
                    const dialCode = phoneData && phoneData.dialCode ? phoneData.dialCode : '90';
                    const code = '+' + dialCode;
                    const codeEl = document.getElementById('wizard_phone_country_code');
                    const phoneEl = document.getElementById('wizard_phone_pure');
                    if (codeEl) { codeEl.value = code; }
                    if (phoneEl) { phoneEl.value = num; }
                });
            }
        });
    </script>
</body>

</html>