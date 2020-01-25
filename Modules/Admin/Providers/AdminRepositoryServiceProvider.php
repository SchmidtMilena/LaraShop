<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Repositories\AdminRepository;
use Modules\Admin\Repositories\Interfaces\AdminRepositoryInterface;
use Modules\Admin\Repositories\RoleRepository;
use Modules\Admin\Repositories\Interfaces\RoleRepositoryInterface;

class AdminRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class
        );

        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
    }
}
