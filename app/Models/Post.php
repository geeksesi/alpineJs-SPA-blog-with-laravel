<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ["title", "category_id", "content", "thumbnail"];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom("title")
            ->saveSlugsTo("slug")
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function brief()
    {
        $text = strip_tags($this->content);
        if (strlen($text) > 150) {
            // truncate string
            $textCut = substr($text, 0, 150);
            $endPoint = strrpos($textCut, " ");

            //if the string doesn't contain any space then it will cut without word basis.
            $text = $endPoint
                ? substr($textCut, 0, $endPoint)
                : substr($textCut, 0);
        }
        return $text;
    }
}
