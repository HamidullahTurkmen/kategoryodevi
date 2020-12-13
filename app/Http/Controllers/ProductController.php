<?php

namespace App\Http\Controllers;


use App\Exports\ProductExport;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product=Product::all();
        $products = Product::with(['user'])->get();
        return view('products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Categories::all();
        return  view('products.create', compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $description=$request->get('description');
        $price=$request->get('price');
        $created_by = User::find(1);

        Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'created_by' => $created_by->id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function export() {
        return Excel::download(new ProductExport, 'products.xlsx');
    }

    public function bannerShow() {
        Product::with(['photo'])->get();
        //yeni bir veritabanı tablosu oluştur

    }
}
