@extends('layouts.admin')
@section('body')
    @push('styles')
        @vite('resources/scss/product/show.scss')
    @endpush
    <div class="grid place-items-center mt-3">
        <div>
            <a href="{{ route('product.create') }}"><button class="bg-blue-400 px-2 py-1 text-white">Tambah</button></a>
            <table class="table-fixed border-collapse mt-3 min-w-[40rem]">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($products) < 1)
                    <tr>
                        <td class="py-2" colspan="5">Tidak ada produk...</td>
                    </tr>
                @endif
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp. {{ floatval($product->harga) }}</td>
                        <td>{{ $product->stok }}</td>
                        <td class="text-center">
                            <a href="{{ route('product.edit', $product->id) }}"><i class="fa fa-pen text-yellow-400"></i></a>
                            <a href="{{ route('product.delete', $product->id) }}"><i class="fa fa-trash text-red-500"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
