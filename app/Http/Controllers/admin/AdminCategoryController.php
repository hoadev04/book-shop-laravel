<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminCategoryController extends Controller
{
    public function category()
    {
        $category = Category::orderBy('name', 'ASC')->get();
        return view('admin.categories', compact('category'));
    }

    public function addCategory()
    {
        return view('admin.addCategories');
    }

    public function storeCategory(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category')->with('thongbao', 'Thêm Danh Mục Thành Công');
    }

    public function editCategory(Category $category)
    {
        return view('admin.editCategories', compact('category'));
    }

    public function updateCategory(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category')->with('thongbao', 'Sửa Danh Mục Thành Công');
    }

    public function destroyCategory(Category $category)
    {
        $category->delete();
        return redirect()->route('category')->with('thongbao', 'Xóa Danh Mục Thành Công');
    }
}
