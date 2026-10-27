<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        ['name' => 'Tere Liye', 'photo' => 'tere-liye.jpg', 'bio' => 'Penulis novel Indonesia yang dikenal lewat serial Bumi dan Pulang.'],
        ['name' => 'Andrea Hirata', 'photo' => 'andrea-hirata.jpg', 'bio' => 'Penulis novel Laskar Pelangi asal Belitung.'],
        ['name' => 'Mark Manson', 'photo' => 'mark-manson.jpg', 'bio' => 'Penulis buku pengembangan diri asal Amerika Serikat.'],
        ['name' => 'Dee Lestari', 'photo' => 'dee-lestari.jpg', 'bio' => 'Penulis dan musisi Indonesia, pencipta serial Supernova.'],
        ['name' => 'Pramoedya Ananta Toer', 'photo' => 'pramoedya.jpg', 'bio' => 'Sastrawan Indonesia penulis Tetralogi Buru.'],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}