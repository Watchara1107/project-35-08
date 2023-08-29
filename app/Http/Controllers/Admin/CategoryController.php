<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function insert(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/index');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        return redirect('admin/category/index');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        return redirect('admin/category/index');
    }


}
