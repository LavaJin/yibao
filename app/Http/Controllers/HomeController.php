<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use Faker\Provider\Base;

class HomeController extends BaseController
{
    /**
     * 首页
     */
    public function index()
    {
        $news = News::whereHas('category', function($query) {
            return $query->where('name', '新闻资讯');
        })->orderBy('id', 'desc')->first();
        $category = Category::where('name', '新闻资讯')->first();
        return view('home', compact('news', 'category'));
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
        $cate = Category::find($id);
        if ($cate->pid == 0) {
            $cates = Category::getCategoriesByPid($id);
        } else {
            $cates = Category::getCategoriesByPid($cate->pid);
        }

        $categoryIds = array_merge($cates->pluck('id')->toArray(), [$id]);

        $news = News::whereIn('category_id', $categoryIds)->orderBy('id', 'desc')->paginate(10);

        return view('category', compact('cate', 'news', 'cates'));
    }

    public function news($id)
    {
        $news = News::with('category')->find($id);
        return view('news', compact('news'));
    }
}
