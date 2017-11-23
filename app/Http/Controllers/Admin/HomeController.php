<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Carbon\Carbon;
use App\SiteConfig;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data['setting'] = $this->getSiteSetting();

        return view('admin.home', $data);
    }

    protected function getSiteSetting()
    {
        $setting = SiteConfig::where('key', 'setting')->first();
        if (! is_null($setting)) {
            return unserialize($setting->value);
        } else {
            return [];
        }
    }
}
