<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;

class FrontController extends Controller
{
    public function index()
    {
      $shirts=Product::orderBy('id', 'desc')->paginate(12);
      // $shirts=Product::inRandomOrder()->paginate(12);

      // $search = \Request::get('search');
      // $shirts = Product::where('name', 'like', '%'.$search.'%')->paginate(6);
      return view('front.home', compact('shirts'));
    }

    public function category($category)
    {
      $shirts=Category::find($category)->products;
      $shirts=Product::where('category_id', '=', $category)->orderBy('id', 'desc')->paginate(12);

      $categories=Category::find($category);
      return view('front.shirts-category', compact('categories', 'shirts'));
    }

    public function shirts()
    {
      $search = \Request::get('search');
      $shirts = Product::where('name', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(12);
      return view('front.shirts', compact('shirts'));
    }

    public function shirt($id)
    {
      $shirt=Product::find($id);
      return view('front.shirt', compact('shirt'));
    }
}
