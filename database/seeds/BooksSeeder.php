<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::create(['name'=>'shodik']);
        $author2 = Author::create(['name'=> 'sanjaya']);
        $author3 = Author::create(['name'=> 'bapak']);

        //sample buku
        $book1 = Book::create(['title'=>'buku1','author_id'=>$author1->id,'amount'=> 3]);
        $book2 = Book::create(['title'=>'buku2','author_id'=>$author2->id,'amount'=> 3]);
        $book3 = Book::create(['title'=>'buku3','author_id'=>$author3->id,'amount'=> 3]);

        $book4 = Book::create(['title'=>'buku4','author_id'=>$author3->id,'amount'=> 3]);

    }
}
