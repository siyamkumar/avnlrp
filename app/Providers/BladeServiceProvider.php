<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use NumberFormatter;

class BladeServiceProvider extends ServiceProvider
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
        Blade::directive('money', function ($value) {
            // $nf = new NumberFormatter("en_IN", NumberFormatter::CURRENCY);
            // $inr = $nf->formatCurrency($money, "INR");
             return "<?php echo 'INR  $value ' ?>";
        });
    }
}
