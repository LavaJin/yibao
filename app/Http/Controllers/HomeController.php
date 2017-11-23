<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;

class HomeController extends BaseController
{
    /**
     * 首页
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function successCase()
    {
        return view('case');
    }

    public function category($id)
    {
        return view('category');
    }
}
