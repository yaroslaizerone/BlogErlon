<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::put('/images', $data['main_image']);
            }

            $post = Post::firstOrCreate($data);
            if (isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            abort(500, $ex->getMessage());
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
           if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            // Проверка и загрузка preview_image
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            // Проверка и загрузка main_image
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }

            $post->update($data);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dump($ex->getMessage());
        }

        return $post;
    }
}
