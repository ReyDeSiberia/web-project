<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
        return view('index');
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
}
