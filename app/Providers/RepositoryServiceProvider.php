<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\IFirms;
use App\Repositories\FirmsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(IFirms::class, FirmsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
