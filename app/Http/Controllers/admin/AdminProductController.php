<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function product() {
        $categories = Category::orderBy('name', 'asc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.products', compact('categories','products'));
    }

    public function addProduct() {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.addProducts', compact('categories'));
    }


    public function storeProduct(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $imageName,
        ]);

        return redirect()->route('product')->with('success', 'Thêm Sản Phẩm Thành Công');
    }

    public function editProduct(Product $product) {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.editProducts', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, Product $product) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
            
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $imageName,
        ]);

        return redirect()->route('product')->with('success', 'Sửa Sản Phẩm Thành Công');
    }

    public function destroyProduct($product) {
        $delproduct = Product::find($product);

        if($delproduct->category->count() > 0) {
            return redirect()->route('product')->with('error', 'Sản phẩm có khóa ngoại');
        } else {
            $delproduct->delete();
            return redirect()->route('product')->with('success', 'Sản phẩm đã xóa');
        }
    }
}
