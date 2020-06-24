<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
        return view('index',['index' => ( new ArticleController()) -> show()]);
    }

    public function galleryAction()
    {
        return view('gallery');
    }

    public function statsAction()
    {
        return view('stats');
    }

    public function videoAction()
    {
        return view('video');
    }

    public function reg()
    {
        return view('reg');
    }

    public function search(Request $request)
    {
        return view('index',['index' => (new ArticleController()) -> search($request->search_field)]);
    }
}
