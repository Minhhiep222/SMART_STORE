<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CustomerUser;
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
        View::composer('header', function ($view) {
            // Lấy giá trị email từ session
            $email = session('email');
            // Lấy thông tin khách hàng dựa trên email từ session
            $customerUser = CustomerUser::where('email', $email)->first();
            $view->with('customerUser', $customerUser);
        });
        View::composer('auth.account.header', function ($view) {
            // Lấy giá trị email từ session
            $email = session('email');
            // Lấy thông tin khách hàng dựa trên email từ session
            $customerUser = CustomerUser::where('email', $email)->first();
            $view->with('customerUser', $customerUser);
        });
    }
}
