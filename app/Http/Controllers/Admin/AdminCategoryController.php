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
   
}
