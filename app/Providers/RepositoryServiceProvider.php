<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\IFirms;
use App\Repositories\FirmsRepository;

use App\Interfaces\INaceCodes;
use App\Repositories\NaceCodesRepository;

use App\Interfaces\IProvince;
use App\Repositories\ProvincesRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(IFirms::class, FirmsRepository::class);
        $this->app->bind(INaceCodes::class, NaceCodesRepository::class);
        $this->app->bind(IProvince::class, ProvincesRepository::class);


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
