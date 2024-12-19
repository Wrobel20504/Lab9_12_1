<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Author;
class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Author::create(['name' => 'Autor 1', 'bio' => 'Biografia autora 1']);
        Author::create(['name' => 'Autor 2', 'bio' => 'Biografia autora 2']);
    }
}
