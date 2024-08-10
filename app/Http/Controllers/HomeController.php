<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(Request $request)
    {
        $newProducts = Product::orderBy('id', 'desc')
            ->limit(10)
            ->get();

        $bestSellingProducts = Product::withCount('detail')
            ->orderBy('detail_count', 'desc')
            ->take(8)
            ->get();


        $categories = Category::orderBy('name', 'ASC')->get();
        $req = $request->key;

        if ($req == '') {
            $prods = Product::orderBy('id', 'DESC');
        } else {
            $prods = Product::where('name', 'like', '%' . $req . '%')->orWhere('price', 'like', $req)->get();
        }
        return view('home', compact('newProducts', 'bestSellingProducts', 'categories', 'prods'));
    }

    
}
