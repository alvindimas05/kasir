<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show(){
        $customers = Customer::all();
        return view('customer.show', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request){
        Customer::insert($request->except(['_token']));
        return redirect()->route('customer.show');
    }

    public function edit(int $id){
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request){
        Customer::where('id', $request->id)->update($request->except(['id', '_token', '_method']));
        return redirect()->route('customer.show');
    }

    public function delete(int $id){
        Customer::where('id', $id)->delete();
        return redirect()->route('product.show');
    }
}
