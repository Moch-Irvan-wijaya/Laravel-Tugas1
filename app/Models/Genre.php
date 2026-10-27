<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['name' => 'Fiksi', 'description' => 'Cerita rekaan yang lahir dari imajinasi penulis.'],
        ['name' => 'Non-Fiksi', 'description' => 'Buku berbasis fakta, pengetahuan, dan kejadian nyata.'],
        ['name' => 'Fantasi', 'description' => 'Cerita dengan dunia magis, makhluk ajaib, dan petualangan.'],
        ['name' => 'Biografi', 'description' => 'Kisah hidup seseorang yang ditulis secara rinci.'],
        ['name' => 'Pengembangan Diri', 'description' => 'Buku yang membahas motivasi, kebiasaan, dan pola pikir.'],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}