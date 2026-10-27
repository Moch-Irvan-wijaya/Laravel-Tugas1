<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan.',
            'price' => 85000,
            'stock' => 20,
            'cover_photo' => 'laskar-pelangi.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Bumi',
            'description' => 'Petualangan Raib, seorang remaja yang memiliki kekuatan istimewa.',
            'price' => 95000,
            'stock' => 10,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}
