<?php

namespace App\Filament\Resources\InvestorResource\Pages;

use App\Filament\Resources\InvestorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInvestor extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = InvestorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
