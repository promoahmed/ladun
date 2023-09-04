<?php

namespace App\Filament\Resources\JoinUsResource\Pages;

use App\Filament\Resources\JoinUsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJoinUs extends ListRecords
{
    protected static string $resource = JoinUsResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
