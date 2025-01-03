<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $posts = [];
        for ($i = 1; $i <= 30; $i++) {
            $posts[] = [
                'title' => 'Post Title ' . $i,
                'user_id' => 2,
                'description' => 'This is a description for post ' . $i,
                'link' => 'https://example.com/post-' . $i,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
