<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => "Php is awesome",
                'intro' => "This is an article about Php",
                'body' => 'This is an article about Php This is an article about Php',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => "We love php",
                'intro' => "This is an article about Php",
                'body' => 'This is an article about Php This is an article about Php',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => "Hello world",
                'intro' => "This is an article about Php",
                'body' => 'This is an article about Php This is an article about Php',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
