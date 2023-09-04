<?php

namespace App\Filament\Resources\StructureResource\Pages;

use App\Filament\Resources\StructureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStructures extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = StructureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
