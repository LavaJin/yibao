<?php

namespace App\Http\Controllers;

use App\Category;
use App\SiteConfig;

class BaseController extends Controller
{
    public function __construct()
    {
    	view()->share('setting', $this->getSetting());
    	view()->share('categories', $this->getCategories());
    }

    protected function getSetting()
    {
        $setting = SiteConfig::where('key', 'setting')->first();
        return ! is_null($setting) ? unserialize($setting->value) : null;
    }

    protected function getCategories()
    {
        $items = Category::select('id', 'name')->where('pid', 0)->get();
        return ! is_null($items) ? $items : null;
    }
}
