<?php

namespace App\Filament\Resources\StructureResource\Pages;

use App\Filament\Resources\StructureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStructure extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = StructureResource::class;
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
