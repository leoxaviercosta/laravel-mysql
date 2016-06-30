<?php

namespace Modules\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //app()->make('Teste');

        $this->app->bind(
            'Modules\Repositories\Interfaces\TesteRepositoryInterface',
            'Modules\Repositories\Eloquent\TesteRepository'
        );
    }
}
