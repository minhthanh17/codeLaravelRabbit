<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Queries\Models\NewConstructionShopDetailQuery;
use App\Queries\Models\NewConstructionShopDetailQueryInterface;
use App\Repositories\DTOs\NewConstructionShopDetailDtoRepository;
use App\Repositories\DTOs\NewConstructionShopDetailDtoRepositoryInterface;
use App\Http\UseCases\SiteAp\Shops\NewConstructionShowUseCase;
use App\Http\UseCases\SiteAp\Shops\NewConstructionShowUseCaseInterface;
use App\Http\UseCases\SiteAp\Shops\NewConstructionStoreUseCase;
use App\Http\UseCases\SiteAp\Shops\NewConstructionStoreUseCaseInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewConstructionShopDetailQueryInterface::class, NewConstructionShopDetailQuery::class);
        $this->app->bind(NewConstructionShopDetailRepositoryInterface::class, NewConstructionShopDetailRepository::class);
        $this->app->bind(NewConstructionShopDetailDtoRepositoryInterface::class, NewConstructionShopDetailDtoRepository::class);
        $this->app->bind(NewConstructionShowUseCaseInterface::class, NewConstructionShowUseCase::class);
        $this->app->bind(NewConstructionStoreUseCaseInterface::class, NewConstructionStoreUseCase::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
