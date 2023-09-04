<?php

namespace App\Filament\Resources\MediaCenterResource\Pages;

use App\Filament\Resources\MediaCenterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMediaCenter extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = MediaCenterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
