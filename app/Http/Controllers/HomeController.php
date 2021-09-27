<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $latest = Post::orderBy("created_at")->paginate(5);
        $popular = Post::inRandomOrder()
            ->limit(5)
            ->get();
        return view("home", [
            "categories" => $categories,
            "latest" => $latest,
            "popular" => $popular,
        ]);
    }
}
