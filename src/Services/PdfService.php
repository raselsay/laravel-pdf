<?php

namespace Rasel\LaravelPdf\Services;

use Barryvdh\DomPDF\Facade\Pdf as DomPdf;

class PdfService
{
    public function view($view, $data = [])
    {
        return DomPdf::loadView($view, $data)->stream();
    }

    public function download($view, $data = [], $filename = 'file.pdf')
    {
        return DomPdf::loadView($view, $data)->download($filename);
    }
}
