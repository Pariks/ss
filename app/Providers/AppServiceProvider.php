<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use View;
use Carbon\Carbon;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age', function($expression){

            $data = json_decode($expression);

            $year = $data[0];
            $month = $data[1];
            $day = $data[2];

            $age = Carbon::createFromDate($year, $month, $day)->age;
             
            return "<?php echo $age; ?>";
        });

        Blade::directive('sayHello', function($expression){
            return "<?php echo 'Hello '.$expression; ?>";
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age = Carbon::createFromDate(1990, 10, 17);
        View::share('age', $age);
        View::share('myname', 'Parikshit');
        // View::share('auth', Auth::user()); //we can not do this way

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }
}
