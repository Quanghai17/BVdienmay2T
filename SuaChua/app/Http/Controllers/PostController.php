<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->limit(3)->get();
      return view(('frontend.blogs.index'),compact('posts'));
    }

    public function show($slug)
    {

        $post = \TCG\Voyager\Models\Post::where('slug', $slug)->first();
        $title = $post->title ?? "";
        $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->limit(6)->get();
        //    dd($recentNew);
        $pageMeta = [
            'title' => $title,
            'meta_description' => $post->meta_description,
            'image' => $post->image,
        ];
        return view('frontend.blogs.show', compact('post', 'title', 'posts', 'pageMeta'));
    }
}
