<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        // $products = Product::all();
        // $categories = Category::all();
        // $blogs = BlogPost::all();
        // return view('admin.dashboard',compact('products','categories','blogs'));
    }
}
