@extends('layouts.admin')
@section('body')
    @push('styles')
        @vite('resources/scss/cashier/index.scss')
    @endpush
    @push('scripts')
        <script>
            const productsUrl = "{{ route('product.list') }}";
        </script>
        @vite('resources/js/cashier/index.js')
    @endpush
    <div class="container mx-auto mt-4">
        <div class="grid grid-cols-2">
            <div class="pe-4">
                <table class="table border-collapse w-full">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
{{--                            <th>Jumlah</th>--}}
{{--                            <th>Total Harga</th>--}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
{{--                        <tr>--}}
{{--                            <td colspan="4">Tidak ada produk...</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>1.</td>--}}
{{--                            <td>RAM 4 GB</td>--}}
{{--                            <td>Rp. 250000</td>--}}
{{--                            <td>--}}
{{--                                <input class="w-full bg-transparent outline-none" type="number" min="1" max="5">--}}
{{--                            </td>--}}
{{--                            <td>Rp. 500000</td>--}}
{{--                            <td class="text-center">--}}
{{--                                <i class="fa fa-trash text-red-500"></i>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                    </tbody>
                </table>
            </div>
            <div>
                <div>
                    <select class="px-3 py-2 rounded" id="product-list">
                        <option selected>Tambah Produk</option>
                    </select>
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl font-bold">Total : Rp. 500000</h1>
                    <button id="btn-confirm" class="text-lg mt-2 bg-blue-500 px-3 py-1">Konfirmasi Pembayaran</button>
                </div>
            </div>
        </div>
    </div>
@endsection
