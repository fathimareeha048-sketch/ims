<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Ellam page kum setting-a anuppa
        View::composer('*', function ($view) {
            $domain = request()->getHost();
            $globalSetting = Setting::where('domain', $domain)->first();
            $view->with('globalSetting', $globalSetting);
        });
    }
}
