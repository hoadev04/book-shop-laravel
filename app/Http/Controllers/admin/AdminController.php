<?php
namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

}
