<?php

namespace Tests\Feature;

use App\Http\Services\PostService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostServiceTest extends TestCase
{
    public function testLimitPostsInRandomOrder(): void
    {
        $limit = 10;
        $result = PostService::getLimitPostsInRandomOrder($limit);

        $this->assertEquals($limit, $result['limit']);
        $this->assertEquals($result['posts']->count(), $limit);
    }

    public function testGetPostFromApi()
    {
        $response = $this->get('/api/v1/posts');

        $this->assertEquals(200, $response['code']);
    }
}
