<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\Project;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make("Users this Month" ,
            User::where('created_at','>', now()->subDays(30))->count()),

            Card::make("Projects Number" ,
            Project::count()),

            Card::make("Company Number" ,
            Company::count()),
        ];
    }
}
