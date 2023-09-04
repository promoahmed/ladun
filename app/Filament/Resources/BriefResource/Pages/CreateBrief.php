<?php

namespace App\Filament\Resources\BriefResource\Pages;

use App\Filament\Resources\BriefResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBrief extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BriefResource::class;
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
