<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Book::create([
            'title' => 'Książka 1',
            'author_id' => 1,
            'category_id' => 1,
            'price' => 29.99,
            'stock' => 10,
            'description' => 'Opis książki 1'
        ]);
        Book::create([
            'title' => 'Książka 2',
            'author_id' => 2,
            'category_id' => 2,
            'price' => 39.99,
            'stock' => 5,
            'description' => 'Opis książki 2'
        ]);
    }
}
