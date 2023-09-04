<?php

namespace App\Filament\Resources\MediaCenterResource\Pages;

use App\Filament\Resources\MediaCenterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMediaCenter extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = MediaCenterResource::class;
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
