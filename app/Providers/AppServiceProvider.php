<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
        Gate::define('admin', function ($user) {
            return $user->is_admin == true;
        });

        Todo::preventLazyLoading();
        User::preventLazyLoading();
        Category::preventLazyLoading();
    }
}
