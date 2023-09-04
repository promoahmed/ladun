<?php

namespace App\Filament\Resources\UtilityResource\Pages;

use App\Filament\Resources\UtilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUtility extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = UtilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
