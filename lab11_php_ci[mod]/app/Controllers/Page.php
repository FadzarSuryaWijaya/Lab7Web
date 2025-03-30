<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function contact()
    {
        $title = "Kontak";
        $content = "Ini halaman Contact";
        return view ('contact', compact('content','title'));
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }

    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }
}
