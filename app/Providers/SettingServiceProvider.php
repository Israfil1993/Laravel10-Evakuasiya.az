<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        view()->composer('frontend.*', function ($view) {

            $settings = Setting::query()
                ->where('status', 1)
                ->pluck('value_' . app()->getLocale(), 'key_' . app()->getLocale())
                ->toArray();

            $view->with('settings', $settings);
        });

    }
}
