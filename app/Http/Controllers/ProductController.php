<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return  $all_products = $this-> show_all_products()  ;

    }

    public function form_add_product()
    {
        return  view("products.add_product");
    }


    /**
     * Show the form for creating a new resource.
     */
    public function display_product($id)
    {


      
        $product = Product::findOrFail($id);

        if (!$product) {
            abort(404, 'Projet introuvable');
        }
 
        return view('products.info_product', compact('product' ));
        //



    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {


        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $path = $request->file('photo')->store('images/products' , 'public' );
            if ( $path ) {
                Product::create([

                    'product_name' =>  $request->product_name,
                    'product_details' =>  $request->details,
                    'price' => $request->price,
                    'product_photo' =>   $path 

                ]);
                $msg =  "product added succefuly";
            }
        } else {
            $msg =  " Error ! ";

        }


        return redirect()->back()->with('product_added',   $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show_all_products(    )
    {
         return $all_products = Product::all() ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
