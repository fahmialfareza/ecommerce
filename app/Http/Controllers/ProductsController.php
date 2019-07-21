<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

        // validation
        $this->validate($request, [
          'name' => 'required',
          'size' => 'required',
          'description' => 'required',
          'category_id' => 'required',
          'price' => 'required|min:4',
          'image' => 'required|image|mimes:png,jpg,jpeg|max:10000',
        ]);
        // image upload
        $image=$request->image;
        if ($image) {
          $imageName=$image->getClientOriginalName();
          $image->move('images', $imageName);
          $formInput['image']=$imageName;
        }

        Product::create($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shirt=Product::find($id);

        return view('admin.product.show', compact('shirt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::pluck('name','id');

        return view('/admin/product/edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product=Product::find($id);
      $formInput=$request->except('image');

      // validation
      $this->validate($request, [
        'name' => 'required',
        'size' => 'required',
        'description' => 'required',
        'category_id' => 'required',
        'price' => 'required|min:4',
        'image' => 'image|mimes:png,jpg,jpeg|max:10000',
      ]);

      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->size = $request->size;
      $product->category_id = $request->category_id;
      // image upload
      $image=$request->image;
      if ($image) {
        $imageName=$image->getClientOriginalName();
        $image->move('images', $imageName);
        $formInput['image']=$imageName;
        $product->image = $imageName;
      }

      $product->save();

      return redirect()->route('product.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
