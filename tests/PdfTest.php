<?php

namespace Rasel\LaravelPdf\Tests;

use Orchestra\Testbench\TestCase;
use Rasel\LaravelPdf\Facades\Pdf;
use Rasel\LaravelPdf\PdfServiceProvider;

class PdfTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [PdfServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return ['Pdf' => Pdf::class];
    }

    /** @test */
    public function test_it_can_create_pdf_service_instance()
    {
        $service = app('pdf');
        $this->assertTrue(method_exists($service, 'download'));
        $this->assertTrue(method_exists($service, 'view'));
    }

    // অথবা নাম এমন হতে হবে
    public function test_download_method_exists()
    {
        $service = app('pdf');

        $this->assertTrue(method_exists($service, 'download'));
    }
}
