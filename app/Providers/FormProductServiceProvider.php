<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class FormProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.product.form_product', function($view){            
            $view->with('list_category', Category::pluck('category_name', 'id'));            
        });
    }
}
