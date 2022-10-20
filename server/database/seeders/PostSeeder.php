<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(5)
            ->hasExternalLinks(2)
            ->create();

        Post::factory()
            ->count(5)
            ->hasExternalLinks(1)
            ->create();
    }
}
