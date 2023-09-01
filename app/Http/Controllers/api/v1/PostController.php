<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Post;

class PostController
{
    public function getPosts()
    {
        $posts = Post::query()->inRandomOrder()->get();

        if($posts->isEmpty()) {
            return [
                'status' => 'error',
                'code' => 500,
                'message' => 'Posts not exists'
            ];
        }

        return [
            'status' => 'success',
            'code' => 200,
            'posts' => $posts->toJson()
        ];
    }
}
