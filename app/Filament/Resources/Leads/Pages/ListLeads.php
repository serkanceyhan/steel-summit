<?php

namespace App\Filament\Resources\Leads\Pages;

use App\Filament\Resources\Leads\LeadResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListLeads extends ListRecords
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    /**
     * @return array<string, Tab>
     */
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Leads'),
            'registration' => Tab::make('Registration Leads')
                ->modifyQueryUsing(fn ($query) => $query->where('lead_type', 'registration')),
            'sponsorship' => Tab::make('Sponsorship Leads')
                ->modifyQueryUsing(fn ($query) => $query->where('lead_type', 'sponsorship')),
        ];
    }
}
