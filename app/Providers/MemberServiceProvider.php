<?php

namespace App\Providers;

use App\Interfaces\MemberServiceInterface;
use App\Services\MemberService;
use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MemberServiceInterface::class, MemberService::class);
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
