<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\project;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static bool $isLazy = true;
    protected function getStats(): array
    {
        $today = Carbon::today(); // Get the current date without the time component
        $dataForToday = project::whereDate('created_at', $today)->count();
        $yesterday = Carbon::yesterday(); // Get the date for yesterday
        $dataForYesterday = project::whereDate('created_at', $yesterday)->count();


        $last3Day =Carbon::now()->subDays(3); // Get the date for yesterday
        $dataForLast3Day = project::whereDate('created_at', $last3Day)->count();
        return [
            Stat::make('Total Project', $dataForToday)
            ->description(($dataForToday- $dataForYesterday).' project increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([$dataForLast3Day,$dataForYesterday, $dataForToday])
            ->color('success'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
