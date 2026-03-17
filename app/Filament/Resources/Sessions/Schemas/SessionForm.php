<?php

namespace App\Filament\Resources\Sessions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class SessionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('event_day_id')
                    ->relationship('eventDay', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                TimePicker::make('start_time')
                    ->required()
                    ->seconds(false),
                TimePicker::make('end_time')
                    ->required()
                    ->seconds(false),
                Select::make('companies')
                    ->relationship('companies', 'name')
                    ->multiple()
                    ->preload()
                    ->columnSpanFull(),
            ]);
    }
}
