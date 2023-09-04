<?php

namespace App\Filament\Resources\MediaCenterResource\Pages;

use App\Filament\Resources\MediaCenterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMediaCenters extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = MediaCenterResource::class;

    protected function getActions(): array
    {
        return [

            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
