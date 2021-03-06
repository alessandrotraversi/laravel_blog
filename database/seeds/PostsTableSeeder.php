<?php

use Illuminate\Database\Seeder;
use App\Post;
    
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate(); //elimina i dati dal DB
        factory('App\Post', 15)->create();
    }
}
