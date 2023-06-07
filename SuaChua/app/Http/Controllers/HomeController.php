<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
  {
    $homeBanners = \App\Banner::where('type', 'home_banner')->where('status', 'ACTIVE')->first();
    $banner_middle = \App\Banner::where('type', 'middle_home')->where('status', 'ACTIVE')->first();
    $about = \TCG\Voyager\Models\Page::where('slug', 'about')->where('status', 'ACTIVE')->first();
    $services = \App\Service::where('status', 'ACTIVE')->get();
    $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->limit(3)->get();
    $questions = \App\Question::where('status', 'ACTIVE')->limit(3)->get();
    // dd($banner_middle);
    return view(('frontend.homepage.index'), [
      'homeBanners' => $homeBanners,
      'about' => $about,  
      'services' => $services, 
      'banner_middle' => $banner_middle,
      'posts' => $posts,
      'questions' => $questions,          
    ],);
  }
}
