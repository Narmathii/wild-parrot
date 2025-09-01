<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
      public function gallery()
    {
        return view('gallery');
    }

       public function animation()
    {
        return view('animation');
    }
}
