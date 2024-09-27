<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Jose Luis',
            'nationality' => 'Inglaterra',
            'birth_date' => '2000-06-08'
        ]);
        Author::create([
            'name' => 'Ramon Antonio',
            'nationality' => 'Argentina',
            'birth_date' => '2004-07-20'
        ]);
        Author::create([
            'name' => 'Maria Jose',
            'nationality' => 'Estados Unidos',
            'birth_date' => '2008-02-10'
        ]);
    }
}