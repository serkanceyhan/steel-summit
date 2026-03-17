<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('type')
                    ->options(['speaker' => 'Speaker', 'sponsor' => 'Sponsor', 'partner' => 'Partner'])
                    ->required(),
                FileUpload::make('logo_path')
                    ->label('Logo')
                    ->directory('company-logos')
                    ->visibility('public')
                    ->image()
                    ->nullable(),
            ]);
    }
}
