<?php

namespace App\Filament\Resources\JoinUsResource\Pages;

use App\Filament\Resources\JoinUsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJoinUs extends EditRecord
{
    protected static string $resource = JoinUsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
