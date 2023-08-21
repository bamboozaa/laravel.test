<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function home() {
        $categories = Category::all();
        return view('category.home', compact('categories'));
    }
}
