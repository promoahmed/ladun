<?php

namespace App\Filament\Resources\BriefResource\Pages;

use App\Filament\Resources\BriefResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrief extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = BriefResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
