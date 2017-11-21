<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    const DEFAULT_ROW = 20;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data['news'] = News::with('author')->paginate(self::DEFAULT_ROW);

        return view('admin.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];

        $data['categories'] = tree(Category::all()->toArray());

        return view('admin.news.create', $data);
    }

    protected function rule()
    {
        return [
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ];
    }

    protected function msg()
    {
        return [
            'title.required' => '请填写文章标题',
            'category_id.required' => '请选择文章栏目',
            'content.required' => '请填写文章内容'
        ];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rule(), $this->msg());

        $data = array_merge($request->all(), ['user_id' => $request->user()->id]);

        News::create($data);

        return redirect()->route('news.index')->with('success', '文章创建成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.news.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect()->route('news.index')->with('success', '删除文章成功');
    }
}
