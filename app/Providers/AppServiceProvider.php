<?php

namespace App\Providers;

use App\Models\Aroma;
use App\Models\Herbal;
use App\Models\MeasureHd;
use App\Models\Nutri;
use App\Models\Patho;
use App\Models\Symptom;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        Relation::enforceMorphMap([
            'Patho' => Patho::class,
            'Symptom' => Symptom::class,
        ]);
    }
}
