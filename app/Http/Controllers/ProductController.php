<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { {
            $products = Product::all();
            return view('backend.products.index', array('products' => $products));
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filename = $request->images->getClientOriginalName();
        $product = new Product;
        $product->name = $request->name;
        $product->images = $filename;
        $product->accessories = $request->accessories;
        $product->price = $request->price;
        $product->warranty = $request->warranty;
        $product->discount = $request->discount;
        $product->status = $request->status;
        $product->desc = $request->desc;
        $product->categories_id = $request->categories_id;
        $product->save();
        $request->images->move(public_path('upload'), $filename);

        if ($request->hasFile('images_phu')) {
            foreach ($request->file('images_phu') as  $file) {
                $image = new ProductImage();
                $fileName = preg_replace("/\s+/", "", $product->name . '_' . $file->getClientOriginalName());
                $fileAddress = $file->move('upload', $fileName);
                $image->name = $fileName;
                $image->image = $fileAddress;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        // $product = Product::create($request->all());
        if ($product) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $product = \App\Product::find($id);
        return view('layouts.frontend.details', array('product' => $product, 'categories' => $categories));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $product_images = ProductImage::where('product_id', '=', $id)->get();

        return view('backend.products.edit', ['products' => $products,'product_images'=> $product_images]);
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
        $filename = $request->images->getClientOriginalName();
        $products = Product::find($id);
        $products->images = $filename;

        $products->name = $request['name'];
        $products->price = $request['price'];
        $products->desc = $request['desc'];
        // $products->images = $request['images'];
        $products->categories_id = $request['categories_id'];
        $products->save();
        $request->images->move(public_path('upload'), $filename);


        if ($request->hasFile('images_phu')) {
            foreach ($request->file('images_phu') as  $file) {
                $image = new ProductImage();
                $fileName = preg_replace("/\s+/", "", $products->name . '_' . $file->getClientOriginalName());
                $fileAddress = $file->move('upload', $fileName);
                $image->name = $fileName;
                $image->image = $fileAddress;
                $image->product_id = $products->id;
                $image->save();
            }
        }

        if ($products) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.edit');
    }
    //


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
        //
    }
}
