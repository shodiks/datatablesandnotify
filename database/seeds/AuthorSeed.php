<?php

use Illuminate\Database\Seeder;
use App\Author;
class AuthorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	App\Author::create(['name'=>'namapenulis']);
    }
}
