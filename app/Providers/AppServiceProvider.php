<?php

namespace App\Providers;

use App\Services\PersonService;
use Illuminate\Support\ServiceProvider;

use App\Repositories\Person\PersonRepository;
use App\Repositories\Person\QBPersonRepository;
use App\Repositories\Person\EQPersonRepository;
use App\Repositories\Person\MockPersonRepository;

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
        app()->bind(PersonService::class, function () {
            return new PersonService(app()->make(PersonRepository::class));
        });

        app()->bind(PersonRepository::class, function () {
            if (app()->environment() === 'testing') {
                return new MockPersonRepository();
            }
            return new QBPersonRepository();
            // return new EQPersonRepository();
        });
    }
}
