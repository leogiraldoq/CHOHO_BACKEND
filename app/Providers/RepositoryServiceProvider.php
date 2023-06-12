<?php

namespace App\Providers;

use App\Interfaces\PedidosInterface;
use App\Repositories\PedidosRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PedidosInterface::class , PedidosRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
