<?php

namespace App\Providers;

use App\Category;
use App\Comment;
use App\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages._sidebar', function($view) {
            $view->with('popularPosts', Post::getPopularPosts());
            $view->with('featuredPosts', Post::getFeaturedPosts());
            $view->with('recentPosts', Post::getRecentPosts());
            $view->with('categories', Category::all());
        });

        view()->composer('admin._partials._sidebar', function($view) {
            $view->with('newCommetnsCount', Comment::where('status', 0)->count());
        });

        view()->composer('pages._categories', function($view) {
            $view->with('categories', Category::all());
        });
    }
}
