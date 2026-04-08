<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('lead_type')
                    ->options([
                        'registration' => 'Registration',
                        'sponsorship' => 'Sponsorship',
                    ])
                    ->required(),
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('company_name')
                    ->required(),
                TextInput::make('country'),
                Select::make('company_field_id')
                    ->label('Field of Activity')
                    ->options([
                        1 => 'Crude Steel Producer',
                        2 => 'Rolling Mill',
                        3 => 'Scrap Supplier',
                        4 => 'Iron Ore or Coal Mining',
                        5 => 'Feroalloys Supplier',
                        6 => 'Trader',
                        7 => 'Tube and Pipes Supplier',
                        8 => 'Automotive Main and Subsidiary Industry',
                        9 => 'Construction / Subcontractor',
                        10 => 'White Household Goods',
                        11 => 'Panel radiators',
                        12 => 'Steel Service Center',
                        13 => 'Stainless Steel Supplier',
                        14 => 'Machinery Supplier',
                        15 => 'Logistics',
                        16 => 'Surveillance Company',
                        17 => 'Finance',
                        19 => 'Raw Material Supplier',
                        20 => 'End User',
                        21 => 'Plant / Equipment',
                        22 => 'Machine Manufacturer',
                        23 => 'Consultancy / Analyst / Law',
                        24 => 'Association',
                        25 => 'Other',
                        26 => 'Steel Fabricator / Cut and Bend Plant',
                        27 => 'Pipe / Profile Manufacturer',
                        28 => 'Wire / Steel Rope Producer',
                        29 => 'Welded Wire Mesh Producer',
                        30 => 'Nuts and Bolts Manufacturer',
                        31 => 'Steel Mesh Manufacturer',
                    ]),
                Select::make('person_role_id')
                    ->label('Position')
                    ->options([
                        1 => 'Owner / Founder / Partner',
                        2 => 'Board Member / Member of the Board',
                        3 => 'President / Chairman',
                        4 => 'Vice President',
                        5 => 'General Manager',
                        6 => 'Assistant General Manager',
                        7 => 'Director',
                        8 => 'Deputy Director',
                        9 => 'Senior Manager',
                        10 => 'Group Manager',
                        11 => 'Coordinator',
                        12 => 'Manager / Department Head',
                        13 => 'Executive',
                        14 => 'Assistant Manager',
                        15 => 'Consultant',
                        16 => 'Supervisor',
                        17 => 'Specialist',
                        18 => 'Assistant Specialist',
                        19 => 'Assistant',
                        20 => 'Other',
                    ]),
                Select::make('registration_package')
                    ->options([
                        'standard' => 'Standard',
                        'vip' => 'VIP',
                        'group' => 'Group',
                        'online' => 'Online',
                    ]),
                Select::make('billing_type')
                    ->options([
                        'corporate' => 'Corporate',
                        'individual' => 'Individual',
                    ]),
                TextInput::make('billing_name'),
                TextInput::make('billing_tax_number'),
                TextInput::make('billing_tax_office'),
                TextInput::make('billing_address'),
                TextInput::make('phone'),
                Toggle::make('gdpr_approved')
                    ->required(),
                Toggle::make('kvkk_approved')
                    ->required(),
            ]);
    }
}
