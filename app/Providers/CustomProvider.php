<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Pendaftaran;
use App\Models\UpdateUrl;
use Illuminate\Support\Facades\View;

class CustomProvider extends ServiceProvider
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
             //cek notif yang N
             $provider_notif = Pendaftaran::where('status','N')->get();
             View::share("provider_notif", $provider_notif);
     
             //url wa
             $provider_url_wa = UpdateUrl::where('nama','whatsapp')->first();
             View::share("provider_url_wa", $provider_url_wa->url);
     
             //url logo
             $provider_url_logo = UpdateUrl::where('nama','logo')->first();
             View::share("provider_url_logo", $provider_url_logo->url);
    }
}
