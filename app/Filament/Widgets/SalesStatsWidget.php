<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SalesStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Sales', '$' . number_format(Order::sum('total_amount'), 2)),
            Stat::make('Total Orders', Order::count()),
            Stat::make('Average Order Value', '$' . number_format(Order::avg('total_amount') ?? 0, 2)),
        ];
    }
}
