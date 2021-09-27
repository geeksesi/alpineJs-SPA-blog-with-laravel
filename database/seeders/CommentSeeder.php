<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Storage::exists("public/image/av")) {
            Storage::disk("local")->makeDirectory("public/image/av");
        }
        Comment::truncate();
        Comment::factory()
            ->count("110")
            ->create();
    }
}
