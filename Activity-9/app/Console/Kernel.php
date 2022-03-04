<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\sendemailJob;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    //protected $commands = [
      //  Commands\inspirationalquote::class,
    //];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         // $schedule->command('inspire')->hourly();
         //$now = Carbon::now();
         $schedule->call('\App\Http\Controllers\sendQuotesController@sendquote')->everyFiveMinutes();
         $schedule->call('\App\Http\Controllers\sendQuotesController@sendweather')->everyTenMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
