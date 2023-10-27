<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Camp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $camps = Camp::where('category', 'camps')->get();
        $birthdays = Camp::where('category', 'birthday')->first();
        $schools = Camp::where('category','schools')->first();
        $archery = Camp::where('category','archery')->first();
        $adventure = Camp::where('category','adventure')->first();
        $obstacle = Camp::where('category','obstacle')->first();
        
        $weekends = Camp::where('category','weekends')->get();
        

        View::share([
            'camps' => $camps,
            'birthdays' => $birthdays,
            'schools' => $schools,
            'weekends'=>$weekends,
            'archery'=>$archery,
            'adventure'=>$adventure,
            'obstacle'=>$obstacle
        ]);
    }
}
