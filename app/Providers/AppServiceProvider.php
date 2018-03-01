<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Carbon::setLocale(config('app.locale'));

        view()->composer('layouts.app', function($view) {
            $articles = \Cache::rememberForever('articles', function() {
                return \App\Article::fetchLatest(4);
            });

            $photos = \Cache::rememberForever('photos', function() {
                return \App\Photo::fetchLatest(6);
            });

            $view->with(compact(['articles', 'photos']));
        });

        view()->composer('partials.sidebar', function($view) {
            $articles = \Cache::rememberForever('popular', function() {
                return \App\Article::fetchLatest(4);
            });
            
            $tags = \Cache::rememberForever('tags', function() {
                return \App\Tag::fetchLatest(20);
            });

            $archives = \Cache::rememberForever('archives', function() {
                return \App\Article::archives();
            });
            
            $view->with(compact(['articles', 'tags', 'archives']));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
