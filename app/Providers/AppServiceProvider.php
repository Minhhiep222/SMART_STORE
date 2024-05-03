<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CustomerUser;
use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Comment;
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
            if(session()->has('email')) {
                $email = session('email');
                $customerUser =CustomerUser::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            // else {
            //     $email = session('emailCustomerUser');
            //     $customerUser = CustomerUser::where('email', $email)->first();
            //     $view->with('customerUser', $customerUser);
            // }
        });
        View::composer('auth.account.header', function ($view) {
            $email = session('email');
            $customerUser = CustomerUser::where('email', $email)->first();
            $view->with('customerUser', $customerUser);
        });
    }
}
