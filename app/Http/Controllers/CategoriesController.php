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

    public function show($id) {
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    public function new() {
        return view('category.new');
    }

    public function store(Request $request) {
        // หากต้องการแทนที่ค่าใหม่ด้วยค่าคงที่สามารถกำหนดค่าก่อนบันทึก ดังนี้ $input['name'] = $request->name;
        Category::create($request->all());
        return redirect('admin/categories');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect('admin/categories');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/categories');
    }
}
