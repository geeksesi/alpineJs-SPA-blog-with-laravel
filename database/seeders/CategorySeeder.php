<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Storage::exists("public/image/categories")) {
            Storage::disk("local")->makeDirectory("public/image/categories");
        }
        Category::truncate();
        Category::factory()
            ->count("10")
            ->create();
    }
}
