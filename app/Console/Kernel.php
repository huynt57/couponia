<?php

namespace App\Console;

use App\Console\Commands\AddAdmin;
use App\Console\Commands\Crawl;
use App\Console\Commands\CrawlJamJa;
use App\Console\Commands\ImportDataProductFeed;
use App\Console\Commands\ImportDeal;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        AddAdmin::class,
        ImportDataProductFeed::class,
        ImportDeal::class,
        Crawl::class,
        CrawlJamJa::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('crawl:post')
                  ->withoutOverlapping()
                  ->everyTenMinutes();

        $schedule->command('crawl:jamja')
            ->withoutOverlapping()
            ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
