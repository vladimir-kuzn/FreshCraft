<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data) {
        Post::firstOrCreate($data);
    }

    public function update($post, $data) {
        $post->update($data);
    }
}
