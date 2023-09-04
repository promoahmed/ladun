<?php

namespace App\Filament\Resources\UtilityResource\Pages;

use App\Filament\Resources\UtilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUtility extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = UtilityResource::class;


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
