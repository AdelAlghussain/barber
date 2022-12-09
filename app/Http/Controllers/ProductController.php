<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Http\Resources\productResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('dashboard.product.products')->with('products', $products);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products = product::get();
        return productResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StoreproductRequest $request)
    {
        $path = $this->AddImage('products', $request->image);

        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'product_photo_path' => $path

        ]);
        return redirect('/products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.addproduct');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('dashboard.product.editproduct', ['product' => $product]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, StoreproductRequest $request)
    {

        $this->DeleteImage($product->product_photo_path);
        $path = $this->AddImage('products', $request->image);
        logger($path);


        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'product_photo_path' => $path

        ]);
        return redirect('/products');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  product::find($id);
        $this->DeleteImage($product->product_photo_path);
        $product->delete();

        return redirect('/products');
    }

    public function AddImage($folder, $file)
    {
        $folder = 'storage/' . $folder;
        $filename  = time() . str_replace(' ', '', $file->getClientOriginalName());
        $path = $file->move($folder,  $filename);
        // $url = asset($path);
        return $path;
    }

    public function DeleteImage($file)
    {
        File::delete($file);
    }
}
