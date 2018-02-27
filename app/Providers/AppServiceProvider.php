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
            $latestArticles = \Cache::rememberForever('latest_articles', function() {
                return \App\Article::fetchLatest(4);
            });
            $view->with('articles', $latestArticles);

            $latestPhotos = \Cache::rememberForever('latest_photos', function() {
                return \App\Photo::fetchLatest(6);
            });
            $view->with('photos', $latestPhotos);
        });

        view()->composer('partials.sidebar', function($view) {
            $popularArticles = \Cache::rememberForever('popular_articles', function() {
                return \App\Article::fetchLatest(4);
            });
            $view->with('articles', $popularArticles);
            
            $popularTags = \Cache::rememberForever('popular_tags', function() {
                return \App\Tag::fetchLatest(20);
            });
            $view->with('tags', $popularTags);

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
