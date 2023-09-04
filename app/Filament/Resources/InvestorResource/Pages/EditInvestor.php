<?php

namespace App\Filament\Resources\InvestorResource\Pages;

use App\Filament\Resources\InvestorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestor extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = InvestorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
