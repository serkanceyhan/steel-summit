<?php

namespace App\Filament\Resources\Attendees\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AttendeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('company')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Select::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'cancelled' => 'Cancelled',
                        'failed' => 'Failed',
                    ])
                    ->default('pending')
                    ->required(),
                TextInput::make('amount_paid')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->minValue(0),
                TextInput::make('currency')
                    ->required()
                    ->maxLength(3)
                    ->default('USD'),
                FileUpload::make('qr_code_path')
                    ->label('QR Code')
                    ->directory('qr-codes')
                    ->visibility('public')
                    ->image()
                    ->nullable(),
            ]);
    }
}
