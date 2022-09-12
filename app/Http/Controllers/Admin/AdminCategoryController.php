<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function show(){
        $categories = Category::orderBy('category_order', 'asc')->get();
        return view('admin.category_show', compact('categories'));
    }

    public function create(){
        return view('admin.category_create');
    }

    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_order' => 'required',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->show_on_menu = $request->show_on_menu;
        $category->category_order = $request->category_order;
        $category->save();

        return redirect()->route('admin_category_show')->with('success', 'Data is created successfully');
    }
   

}
