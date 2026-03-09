<?php

namespace Rasel\LaravelPdf;

use Illuminate\Support\ServiceProvider;
use Rasel\LaravelPdf\Services\PdfService;

class PdfServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('pdf', function () {
            return new PdfService();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/pdf.php' => config_path('pdf.php')
        ], 'config');
    }
}
