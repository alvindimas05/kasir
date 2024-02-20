@extends('layouts.admin')
@section('body')
    @push('styles')
        @vite('resources/scss/customer/create.scss')
    @endpush
    <div class="grid place-items-center mt-5">
        <form action="{{ route('customer.store') }}" method="post">
            @csrf
            <h1 class="text-center text-xl font-bold">Tambah Pelanggan</h1>
            <div class="my-2">
                <input class="p-2 border outline-none" type="text" name="name" placeholder="Nama">
            </div>
            <div class="my-2">
                <input class="p-2 border outline-none" type="text" name="alamat" placeholder="Alamat">
            </div>
            <div class="my-2">
                <input class="p-2 border outline-none" type="number" name="no_telp" placeholder="No. Telp">
            </div>
            <div class="grid place-items-center">
                <button class="bg-blue-400 p-2 text-white" type="submit">Tambah</button>
            </div>
        </form>
    </div>
@endsection
