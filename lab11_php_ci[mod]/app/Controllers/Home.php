<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index()
    {
        helper('text'); // <- Tambahin helper text di sini!
        
        $artikelModel = new ArtikelModel();
        
        // Ambil 3 artikel terbaru buat featured
        $featured = $artikelModel->orderBy('created_at', 'DESC')->findAll(3);

        // Ambil 5 artikel terbaru lainnya buat list berita terbaru
        $artikels = $artikelModel->orderBy('created_at', 'DESC')->findAll(5);

        return view('home', [
            'featured' => $featured,
            'artikels' => $artikels
        ]);
    }
}
