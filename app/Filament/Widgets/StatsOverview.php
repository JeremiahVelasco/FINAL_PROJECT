<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        $verifiedUsers = User::whereNotNull('email_verified_at')
                            ->orWhereNotNull('google_id')
                            ->count();

        return [
            Stat::make('Total Users', User::count()),
            Stat::make('Verified Users', $verifiedUsers),
            Stat::make('Total Products', Product::count()),
        ];
    }
}
