<?php

namespace App\Http\Services;

use App\Models\Post;

class PostService
{
    public static function getLimitPostsInRandomOrder(int $limit)
    {
        $posts = Post::query()->inRandomOrder()->take($limit)->get();

        return compact('posts', 'limit');
    }
}
