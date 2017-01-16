<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $masukin = [
        		['title' => 'title1','content' => 'content1', 'tambah' => 'tambah1']

        ];
        DB::table('posts')->insert($masukin);

    }
}
