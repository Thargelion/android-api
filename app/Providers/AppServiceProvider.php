<?php

namespace App\Providers;

use App\Infrastructure\Eloquent\AndroidEloquentRepo;
use App\Repositories\AndroidRepository;
use App\Services\AndroidService;
use App\UseCases\AndroidUseCases;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        AndroidRepository::class => AndroidEloquentRepo::class,
        AndroidUseCases::class => AndroidService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
