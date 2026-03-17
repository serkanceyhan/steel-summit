<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('company_id')
                    ->relationship('company', 'name')
                    ->searchable()
                    ->preload(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('bio')
                    ->rows(4)
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->label('Image')
                    ->disk('public')
                    ->visibility('public')
                    ->image(),
                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url()
                    ->maxLength(255),
            ]);
    }
}
