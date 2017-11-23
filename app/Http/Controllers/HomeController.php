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

    /**
     *
     */
}
