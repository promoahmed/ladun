<?php

namespace App\Filament\Resources\UtilityResource\Pages;

use App\Filament\Resources\UtilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUtilities extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = UtilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
