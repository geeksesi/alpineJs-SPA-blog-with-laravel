<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\directoryExists;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Storage::exists("public/images")) {
            Storage::disk("local")->makeDirectory("public/images");
        }
        Post::truncate();
        Post::factory()
            ->count("55")
            ->create();
    }
}
