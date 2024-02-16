<?php

namespace App\Services;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PostService
{
    public function getLatestPosts() {
        $latestPosts = Post::orderBy('created_at', 'desc')->take(3)->get();

        $posts = [];
        if ($latestPosts && count($latestPosts) > 0) {
            foreach ($latestPosts as $post) {
                $excerpt = Str::limit($post->content, 100);
                $onlyValues = [
                    'id' => $post->id,
                    'title' => $post->title,
                    'excerpt' => $excerpt,
                    'created_at' => $post->created_at
                ];
                $posts [] = $onlyValues;
            }
        }

        return $posts;
    }

    public function getAllPosts(): array
    {
        $allPosts = Post::orderBy('created_at', 'desc')->where('status', '=', 1)->get();

        $posts = [];
        if ($allPosts && count($allPosts) > 0) {
            foreach ($allPosts as $post) {
                $excerpt = Str::limit($post->content, 100);
                $onlyValues = [
                    'id' => $post->id,
                    'title' => $post->title,
                    'excerpt' => $excerpt,
                    'created_at' => $post->created_at
                ];
                $posts [] = $onlyValues;
            }
        }

        return $posts;
    }
}
