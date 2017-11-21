<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{

    const DEFAULT_ROW = 20;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];

        $data['categories'] = Category::paginate(self::DEFAULT_ROW);

        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $categories = tree(Category::all()->toArray());

        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name' => ['required', 'unique:categories']],
            ['name.required' => '栏目名不能为空', 'name.unique' => '栏目名已存在']
        );

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', '创建成功');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];

        $data['category'] = Category::findOrFail($id);
        $data['categories'] = tree(Category::all()->toArray());

        return view('admin.category.edit', $data);
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

        $this->validate(
            $request,
            ['name' => ['required', Rule::unique('categories')->ignore($id)]],
            ['name.required' => '栏目名不能为空', 'name.unique' => '栏目名已存在']
        );

        Category::findOrFail($id)->update($request->all());

        return redirect()->route('categories.index')->with('success', '修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if (Category::hasChild($category->id)) {
            return back()->with('error', '该栏目下面有子栏目，不能进行删除');
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', '删除成功');
    }
}
