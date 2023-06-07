<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $key_form = $request->key;
        $book = \App\Book::where('phone', '=', $key_form)->get();
        // dd($book);
        return view('frontend.search.index', [
            'book' => $book,

        ]);
    }
}
