<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
      $about = \TCG\Voyager\Models\Page::where('slug', 'about')->where('status', 'ACTIVE')->first();
      return view(('frontend.about.index'), [
        'post' => $about,   
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
