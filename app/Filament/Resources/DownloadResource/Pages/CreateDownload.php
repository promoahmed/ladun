<?php

namespace App\Filament\Resources\DownloadResource\Pages;

use App\Filament\Resources\DownloadResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;



class CreateDownload extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = DownloadResource::class;


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
