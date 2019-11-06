<?php

use App\Post;
use Illuminate\Database\Seeder;

class posts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)->create();
    }
}
