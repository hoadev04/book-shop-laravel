<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsListController extends Controller
{
    function productList()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(6);
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('productsList', compact('categories', 'products'));
    }


    function productByCategory(Request $request)
    {
        if ($request->category_id) {
            $products = Product::where('category_id', $request->category_id)->orderBy('id', 'DESC')->paginate(9);
        } else {
            $products = Product::orderBy('id', 'DESC')->paginate(6);
        }

        $categories = Category::orderBy('name', 'ASC')->get();
        return view('productsList', compact('categories', 'products'));
    }


    function productDetail(Product $product)
    {
        $comment = Comment::where('product_id', $product->id)->get();
        // $productDetail = Product::all()->where('id', '=', $id)->first();
        $splienquan = Product::where('category_id', $product->category_id)->where('id', '<>', $product->id)->get();
        return view('productDetail', compact('product', 'splienquan', 'comment'));
    }

    public function post_comment($productId)
    {
        $data = request()->all('comment');

        $data['product_id'] = $productId;
// dd($productId);
        $data['user_id'] = Auth::user()->id;
        // dd($data);
        if (Comment::create($data)) {
            return redirect()->back();
        }
        return redirect()->back();
    }

}
