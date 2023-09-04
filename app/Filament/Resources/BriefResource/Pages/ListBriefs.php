<?php

namespace App\Filament\Resources\BriefResource\Pages;

use App\Filament\Resources\BriefResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBriefs extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = BriefResource::class;

    protected function getActions(): array
    {
        return [
//            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
