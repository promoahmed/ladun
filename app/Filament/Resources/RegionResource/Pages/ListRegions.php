<?php

namespace App\Filament\Resources\RegionResource\Pages;

use App\Filament\Resources\RegionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegions extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = RegionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
