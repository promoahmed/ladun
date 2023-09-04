<?php

namespace App\Filament\Resources\PhaseResource\Pages;

use App\Filament\Resources\PhaseResource;
use Filament\Pages\Actions;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Pages\CreateRecord;

class CreatePhase extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = PhaseResource::class;
    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
