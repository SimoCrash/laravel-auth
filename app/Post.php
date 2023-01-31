<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getSlug($text) {
        $slugBase = Str::slug($text);
        $slug = $slugBase;
        $i = 1;
        while(Post::where('slag', $slug)->first()){
            $slug = $slugBase . '-' . $i;
            $i++;
        }
        return $slug;
    }
}
