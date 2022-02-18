<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::where('name', 'like', '%gray%')->get();   //return 'collection' it is like array
        $categories = Category::get();
        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }
    public function create()
    {
        $categories = Category::get();
        return view('admin.categories.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $requset)
    {
        // dd($requset->all());
        $category = new Category();
        $category->name = $requset->post('name');
        $category->slug = Str::slug($requset->post('name'), '-');
        $category->cat_id = $requset->post('cat_id');

        $category->save();
        //response via redirect (PRG) = Post redirect get
        return redirect('/admin/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);   //return object or null
        dd($category);
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }
}
