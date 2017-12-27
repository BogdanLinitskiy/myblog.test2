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
        		'title' => 'php is awesome',
		        'intro' => 'this is an article about Php',
		        'body' => 'this is an article about Php, this is an article about Php',
		        'created_at' => date("Y-m-d H:i:s")
	        ],
	        [
		        'title' => 'We love PHP',
		        'intro' => 'this is an article about Php',
		        'body' => 'this is an article about Php, this is an article about Php',
		        'created_at' => date("Y-m-d H:i:s")
	        ],
	        [
		        'title' => 'Hello, World!',
		        'intro' => 'this is an article about Php',
		        'body' => 'this is an article about Php, this is an article about Php',
		        'created_at' => date("Y-m-d H:i:s")
	        ],
        ]);

    }
}
