<?php

namespace App\Http\Controllers\Admin;

use App\SiteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{

    public function setting(Request $request)
    {
        $data = [];

        $setting = SiteConfig::where('key', 'setting')->first();

        if (! is_null($setting)) {
            $setting->value = serialize($request->all());
            $setting->save();
        } else {
            $model = new SiteConfig();
            $model->key = 'setting';
            $model->value = serialize($request->all());
            $model->save();
        }

        return back()->with('success','设置成功');
    }

}
