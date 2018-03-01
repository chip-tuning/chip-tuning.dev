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
            $view->with('articles', $articles);

            $photos = \Cache::rememberForever('photos', function() {
                return \App\Photo::fetchLatest(6);
            });
            $view->with('photos', $photos);
        });

        view()->composer('partials.sidebar', function($view) {
            $popular = \Cache::rememberForever('popular', function() {
                return \App\Article::fetchLatest(4);
            });
            $view->with('articles', $popular);
            
            $tags = \Cache::rememberForever('tags', function() {
                return \App\Tag::fetchLatest(20);
            });
            $view->with('tags', $tags);

            $archives = \Cache::rememberForever('archives', function() {
                return \App\Article::archives();
            });
            $view->with('archives', $archives);
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
