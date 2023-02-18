<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->truncate();

        $books = [
            [
                'name' => 'PHP Book',
                'price' => 2000,
                'author' => 'PHPER'
            ],
            [
                'name' => 'Laravel Book',
                'price' => 3000,
                'author' => null
            ],
            [
                'name' => 'Ruby Book',
                'price' => 2500,
                'author' => 'Rubyist'
            ]
        ];

        foreach($books as $book){
            Book::create($book);
        }
    }
}
