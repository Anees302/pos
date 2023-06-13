<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product= Product::all();

        return view('products',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('createproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated= $request->validate([
            'pname'=>'required',
            'cost'=>'integer|required',
            // 'worth'=>'integer'|'required',
            'stock'=>'integer|required',
            // 'revenue'=>'integer'|'required',
            'vendor'=>'string|required'

         ]);

         Product::create([
              'pname'=>$validated['pname'],
              'type'=>$request->input('type'),
              'brand'=>$request->input('brand'),
              'cost'=>$validated['cost'],
              'stock'=>$validated['stock'],
              'worth'=>500,
              'revenue'=>1000,
              'vendor'=>$validated['vendor'],
         ]);
         return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Product $product)
    {


        return view('createproduct',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated= $request->validate([
            'pname'=>'required',
            'cost'=>'integer|required',
            // 'worth'=>'integer'|'required',
            'stock'=>'integer|required',
            // 'revenue'=>'integer'|'required',
            'vendor'=>'string|required'

         ]);

            $product->pname=$validated['pname'];
            $product->type =$request->input('type');
            $product->brand=$request->input('brand');
            $product->cost =$request->input('cost');
            $product->stock=$validated['stock'];
            $product->worth=500;
            $product->revenue =1000;
            $product->vendor=$validated['vendor'];

            $product->save();
            return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
      $product->delete();
      return redirect()->route('products.index')->with('success','product deleted succefully');
    }
}
