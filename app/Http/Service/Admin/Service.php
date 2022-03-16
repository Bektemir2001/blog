<?php

namespace App\Http\Service\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class Service
{

    public function store($date){
        try {
            $tags = $date['tag'];
            unset($date['tag']);

            $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);
            $date['main_image'] = Storage::disk('public')->put('images', $date['main_image']);
            $post = Post::firstOrCreate($date);
            $post->tags()->attach($tags);
        } catch(\Exception $exeption) {
            abort(500);
        }
    }

    public function update($date, $post){
        $tags = $date['tag'];
        unset($date['tag']);

        $date['preview_image'] = Storage::disk('public')->put('/images', $date['preview_image']);
        $date['main_image'] = Storage::disk('public')->put('images', $date['main_image']);
        $post->update($date);
        $post->tags()->sync($tags);
    }
}
