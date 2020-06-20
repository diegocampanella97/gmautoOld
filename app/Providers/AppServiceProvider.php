<?php

namespace App\Providers;

use App\Exemplar;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
    public function boot(){
        Carbon::setLocale(env('LOCALE', 'it'));


        // if(DB::connection()->getDatabaseName())
        // {
        //   if(DB::connection()->getDatabaseName()!="forge"){
        //     if(Schema::hasTable('exemplars')) {
        //         $exemplars = Exemplar::all();
        //         View::share('exemplars',$exemplars);
        //     }
        //   }
        // }
    }
}
