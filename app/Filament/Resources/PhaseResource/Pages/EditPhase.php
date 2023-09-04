<?php

namespace App\Filament\Resources\PhaseResource\Pages;

use App\Filament\Resources\PhaseResource;
use Filament\Pages\Actions;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Pages\EditRecord;

class EditPhase extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = PhaseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
