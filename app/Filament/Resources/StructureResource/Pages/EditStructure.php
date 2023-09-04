<?php

namespace App\Filament\Resources\StructureResource\Pages;

use App\Filament\Resources\StructureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStructure extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = StructureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
