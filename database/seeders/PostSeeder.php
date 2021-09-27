<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

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
        if (!directoryExists(__DIR__ . "/../public/storage/z")) {
            Post::truncate();
        }
        Post::factory()
            ->count("55")
            ->create();
    }
}
