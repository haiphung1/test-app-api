<?php

namespace App\Providers;

use App\Interfaces\JoinsServiceInterface;
use App\Services\JoinService;
use Illuminate\Support\ServiceProvider;

class JoinsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(JoinsServiceInterface::class, JoinService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
