<?php

namespace App\Cells;

use CodeIgniter\View\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function render()
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();
        return view('/components/artikel_terkini', ['artikel' => $artikel]);
    }
    public function render2()
    {
        // Placeholder data - in a real application, this would come from the database
        $artikelTerkini = [
            [
                'judul' => 'Menteri PUPR Tinjau Pembangunan Jembatan Suramadu',
                'gambar' => 'https://via.placeholder.com/100x75',
                'tanggal' => '20 Mar 2025'
            ],
            [
                'judul' => 'Bank Indonesia Pertahankan Suku Bunga di Level 5,25%',
                'gambar' => 'https://via.placeholder.com/100x75',
                'tanggal' => '19 Mar 2025'
            ],
            [
                'judul' => 'Kemenkes: Kasus Demam Berdarah Menurun 15% Dibanding Tahun Lalu',
                'gambar' => 'https://via.placeholder.com/100x75',
                'tanggal' => '18 Mar 2025'
            ],
            [
                'judul' => 'Timnas Indonesia Siap Hadapi Thailand di Final Piala AFF',
                'gambar' => 'https://via.placeholder.com/100x75',
                'tanggal' => '17 Mar 2025'
            ],
            [
                'judul' => 'Google Luncurkan Smartphone Pixel 10 di Indonesia',
                'gambar' => 'https://via.placeholder.com/100x75',
                'tanggal' => '16 Mar 2025'
            ]
        ];
        
        $html = '';
        foreach ($artikelTerkini as $artikel) {
            $html .= '<div class="latest-article">
                <div class="latest-article-img">
                    <img src="' . $artikel['gambar'] . '" alt="' . $artikel['judul'] . '">
                </div>
                <div class="latest-article-content">
                    <h4><a href="#">' . $artikel['judul'] . '</a></h4>
                    <span class="date"><i class="far fa-calendar-alt"></i> ' . $artikel['tanggal'] . '</span>
                </div>
            </div>';
        }
        
        return $html;
    }
}
