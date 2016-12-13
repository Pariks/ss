<?php
 

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('app\Billing\BillingInterface', 'app\Billing\StripeBilling');
    }

}