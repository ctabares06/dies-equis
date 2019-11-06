<?php

use App\Comment;
use Illuminate\Database\Seeder;

class comments_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 20)->create();
    }
}
