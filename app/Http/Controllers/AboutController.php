<?php

namespace App\Http\Controllers;
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

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
      $about = \TCG\Voyager\Models\Page::where('slug', 'about')->where('status', 'ACTIVE')->first();
      $pageMeta = [
        'title' => $about->title,
        'meta_description' => $about->meta_description,
        'image' => $about->images
        ];
      return view(('frontend.about.index'), [
        'post' => $about,   
        'pageMeta' => $pageMeta,   
      ],);
    }

    public function show()
    {
      $price_list = \TCG\Voyager\Models\Page::where('slug', 'bang-gia')->where('status', 'ACTIVE')->first();
      return view(('frontend.about.index'), [
        'post' => $price_list,   
      ],);
    }
}
