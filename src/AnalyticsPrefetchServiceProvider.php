<?php

namespace SiteOrigin\AnalyticsPrefetch;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use SiteOrigin\AnalyticsPrefetch\Middleware\AddPrefetch;

class AnalyticsPrefetchServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Route::aliasMiddleware('analytics.prefetch', AddPrefetch::class);
    }

}