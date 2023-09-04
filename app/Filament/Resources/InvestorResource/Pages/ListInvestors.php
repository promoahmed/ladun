<?php

namespace App\Filament\Resources\InvestorResource\Pages;

use App\Filament\Resources\InvestorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvestors extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = InvestorResource::class;


    protected function getActions(): array
    {
        return [

            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }

}
