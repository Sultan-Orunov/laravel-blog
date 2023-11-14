<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class PostService
{
    public function store($data)
    {
        try {
            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            $data['main_image'] = Storage::put('/images', $data['main_image']);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagsIds);
        }catch (Exception $exception){
            abort(404);
        }
    }
}
