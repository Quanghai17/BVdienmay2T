<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
Nguyễn Quang Hải
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

class PostController extends Controller
{
    public function index()
    {
      $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->paginate(6);
      $pageMeta = [
        'title' => 'Tin tức',
        ];
      return view(('frontend.blogs.index'),compact('posts','pageMeta'));
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
