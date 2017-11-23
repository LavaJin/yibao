<?php

namespace App\Http\Controllers\Admin;

use App\SiteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function setting(Request $request)
    {
        $setting = SiteConfig::where('key', 'setting')->first();
        $data = $request->only('title', 'keywords', 'description');
        if (! is_null($setting)) {
            $setting->value = serialize($data);
            $setting->save();
        } else {
            $model = new SiteConfig();
            $model->key = 'setting';
            $model->value = serialize($data);
            $model->save();
        }

        return back()->with('success','设置成功');
    }

}
