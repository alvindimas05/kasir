@extends('layouts.app')
@section('content')
    @push('styles')
        @vite('resources/scss/product/edit.scss')
    @endpush
    <div class="grid place-items-center mt-5">
        <form action="{{ route('product.update') }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $id }}">
            <h1 class="text-center text-xl font-bold">Edit Produk</h1>
            <div class="my-2">
                <input class="p-2 border outline-none" type="text" name="name" placeholder="Nama" value="{{ $product->name }}">
            </div>
            <div class="my-2">
                <input class="p-2 border outline-none" type="number" name="harga" placeholder="Harga" value="{{ floatval($product->harga) }}">
            </div>
            <div class="my-2">
                <input class="p-2 border outline-none" type="number" name="stok" placeholder="Stok" value="{{ $product->stok }}">
            </div>
            <div class="grid place-items-center">
                <button class="bg-yellow-500 py-2 px-4 text-white" type="submit">Edit</button>
            </div>
        </form>
    </div>
@endsection
