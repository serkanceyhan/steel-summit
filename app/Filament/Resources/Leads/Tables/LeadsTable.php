<?php

namespace App\Filament\Resources\Leads\Tables;

use App\Models\Lead;
use App\Services\LeadRegistrationConversionService;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LeadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('lead_type')
                    ->badge()
                    ->color(fn (string $state): string => $state === 'sponsorship' ? 'warning' : 'info')
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'submitted' => 'info',
                        'payment_pending' => 'warning',
                        'payment_failed' => 'danger',
                        'converted' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('full_name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('company_name')
                    ->searchable(),
                TextColumn::make('country')
                    ->searchable(),
                TextColumn::make('company_field_id')
                    ->label('Field of Activity')
                    ->formatStateUsing(fn (?int $state): string => match ($state) {
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
                        default => '-',
                    })
                    ->toggleable(),
                TextColumn::make('person_role_id')
                    ->label('Position')
                    ->formatStateUsing(fn (?int $state): string => match ($state) {
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
                        default => '-',
                    })
                    ->toggleable(),
                TextColumn::make('registration_package')
                    ->badge()
                    ->toggleable(),
                TextColumn::make('billing_type')
                    ->badge()
                    ->toggleable(),
                TextColumn::make('phone')
                    ->searchable(),
                IconColumn::make('gdpr_approved')
                    ->boolean(),
                IconColumn::make('kvkk_approved')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('approvePayment')
                    ->label('Approve Payment')
                    ->icon('heroicon-m-check-badge')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Lead $record): bool => $record->lead_type === 'registration' && $record->status !== Lead::STATUS_CONVERTED)
                    ->action(function (Lead $record): void {
                        app(LeadRegistrationConversionService::class)->convertLeadToAttendee($record);

                        Notification::make()
                            ->title('Lead converted to attendee')
                            ->success()
                            ->send();
                    }),
                Action::make('markPaymentFailed')
                    ->label('Mark Payment Failed')
                    ->icon('heroicon-m-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn (Lead $record): bool => $record->lead_type === 'registration' && $record->status !== Lead::STATUS_CONVERTED)
                    ->action(function (Lead $record): void {
                        app(LeadRegistrationConversionService::class)->markPaymentFailed($record);

                        Notification::make()
                            ->title('Lead marked as payment failed')
                            ->danger()
                            ->send();
                    }),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
