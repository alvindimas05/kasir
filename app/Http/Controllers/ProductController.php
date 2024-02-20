<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all(['id', 'name', 'harga', 'stok']);
        return response()->json($products);
    }
    public function show(){
        $products = Product::all();
        return view('product.show', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        Product::insert($request->except(['_token']));
        return redirect()->route('product.show');
    }

    public function edit(int $id){
        $product = Product::find($id);
        return view('product.edit', compact('product', 'id'));
    }

    public function update(Request $request){
        Product::where('id', $request->id)->update($request->except(['id', '_token', '_method']));
        return redirect()->route('product.show');
    }

    public function delete(int $id){
        Product::where('id', $id)->delete();
        return redirect()->route('product.show');
    }
}
