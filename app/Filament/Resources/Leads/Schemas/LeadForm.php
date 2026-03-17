<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('company_name')
                    ->required(),
                Toggle::make('gdpr_approved')
                    ->required(),
                Toggle::make('kvkk_approved')
                    ->required(),
            ]);
    }
}
