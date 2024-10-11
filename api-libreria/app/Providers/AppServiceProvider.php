<?php

namespace App\Providers;

use App\Repositories\impl\LibroRepositoryImpl;
use App\Repositories\LibroRepository;
use App\Services\impl\LibroServiceImpl;
use App\Services\LibroService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(LibroService::class, LibroServiceImpl::class);
        $this->app->bind(LibroRepository::class, LibroRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
