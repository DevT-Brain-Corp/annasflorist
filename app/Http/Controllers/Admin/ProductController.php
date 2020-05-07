<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(10);

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

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
        $this->validate($request, [
            'product_image'       => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'product_name'        => 'required|max:255',
            'product_description' => 'required|max:255',
            'product_price'       => 'required|integer',
            'product_stock'       => 'required|integer',
            'category_id'         => 'required|integer',
        ]);

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $product_image = time() . Str::slug($request->product_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $product_image);
        }

        Product::create([
            'product_image'       => $product_image,
            'product_name'        => $request->product_name,
            'product_slug'        => strtolower($request->product_name),
            'product_description' => $request->product_description,
            'product_price'       => $request->product_price,
            'product_stock'       => $request->product_stock,
            'product_status'      => $request->product_status,
            'category_id'         => $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success', 'Product is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('categories', 'product'));
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
        $this->validate($request, [
            'product_name'        => 'required|max:255',
            'product_description' => 'required|max:255',
            'product_price'       => 'required|integer',
            'product_stock'       => 'required|integer',
            'category_id'         => 'required|integer',
        ]);

        Product::whereId($id)->update([
            'product_name'        => $request->product_name,
            'product_description' => $request->product_description,
            'product_price'       => $request->product_price,
            'product_stock'       => $request->product_stock,
            'product_status'      => $request->product_status,
            'category_id'         => $request->category_id,
        ]);

        return redirect()->route('product.index')->with('success', 'Product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product is successfully deleted');
    }
}
