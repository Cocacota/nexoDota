<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'type' => 'Libro',
            'category_id' => 1,
            'title' => 'Libro De La Selva',
            'image' => 'https://www.penguinlibros.com/ar/2881405/el-libro-de-la-selva.jpg',
            'original_title' => 'Libro De La Jungla',
            'publisher' => 'Publicador',
            'publication_date' => "2024-06-08",
            'pages' => 50,
            'country' => 'Paris',
            'author_id' => 2
        ]);
        Book::create([
            'type' => 'Cuento',
            'category_id' => 2,
            'title' => 'Cuentos De Ayer Y Hoy',
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_763987-MLA44313487690_122020-O.webp',
            'original_title' => 'Cuentos Del Dia A Dia',
            'publisher' => 'Repartidor',
            'publication_date' => "2022-06-08",
            'pages' => 510,
            'country' => 'Alla',
            'author_id' => 1
        ]);
        Book::create([
            'type' => 'Novela',
            'category_id' => 3,
            'title' => 'El Señor De Los Anillos',
            'image' => 'https://images.cdn3.buscalibre.com/fit-in/360x360/54/49/5449ba87a3e457a22dd6d0972b5c261e.jpg',
            'original_title' => 'The Lord Of The Rings',
            'publisher' => 'Minotauro',
            'publication_date' => "1954-07-29",
            'pages' => 1178,
            'country' => 'Reino Unido',
            'author_id' => 3
        ]);
        Book::create([
            'type' => 'Novela',
            'category_id' => 1,
            'title' => 'Cien Años De Soledad',
            'image' => 'https://www.rae.es/sites/default/files/portada_cien_anos_de_soledad_0.jpg',
            'original_title' => 'Cien Años De Soledad',
            'publisher' => 'Sudamericana',
            'publication_date' => "1967-06-05",
            'pages' => 417,
            'country' => 'Colombia',
            'author_id' => 1
        ]);
        Book::create([
            'type' => 'Ensayo',
            'category_id' => 2,
            'title' => 'La Repúblika',
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_910625-MLA50601447559_072022-O.webp',
            'original_title' => 'Politeia',
            'publisher' => 'Akal',
            'publication_date' => "1907-06-05",
            'pages' => 300,
            'country' => 'Grecia',
            'author_id' => 3
        ]);
        Book::create([
            'type' => 'Cuento',
            'category_id' => 3,
            'title' => 'El Aleph',
            'image' => 'https://www.tematika.com/media/catalog/Ilhsa/Imagenes/526276.jpg',
            'original_title' => 'El Aleph',
            'publisher' => 'Emecé',
            'publication_date' => "1949-06-01",
            'pages' => 146,
            'country' => 'Argentina',
            'author_id' => 2
        ]);
        Book::create([
            'type' => 'Poema',
            'category_id' => 1,
            'title' => 'La Divina Comedia',
            'image' => 'https://www.mrbooks.com/mrbooks/portadas/9788412045062.webp',
            'original_title' => 'Divina Commedia',
            'publisher' => 'Alighieri',
            'publication_date' => "1320-10-01",
            'pages' => 432,
            'country' => 'Italia',
            'author_id' => 1
        ]);
        Book::create([
            'type' => 'Biografía',
            'category_id' => 2,
            'title' => 'La Vida De Nikola Tesla',
            'image' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1555518163i/13341366.jpg',
            'original_title' => 'My Inventions',
            'publisher' => 'Barnes & Noble',
            'publication_date' => "1919-09-01",
            'pages' => 175,
            'country' => 'Estados Unidos',
            'author_id' => 3
        ]);
    }
}