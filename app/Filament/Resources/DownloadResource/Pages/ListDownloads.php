<?php

namespace App\Filament\Resources\DownloadResource\Pages;

use App\Filament\Resources\DownloadResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDownloads extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = DownloadResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
