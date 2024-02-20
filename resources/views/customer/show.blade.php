@extends('layouts.admin')
@section('body')
    @push('styles')
        @vite('resources/scss/product/show.scss')
    @endpush
    <div class="grid place-items-center mt-3">
        <div>
            <a href="{{ route('customer.create') }}"><button class="bg-blue-400 px-2 py-1 text-white">Tambah</button></a>
            <table class="table-fixed border-collapse mt-3 min-w-[40rem]">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($customers) < 1)
                    <tr>
                        <td class="py-2" colspan="5">Tidak ada pelanggan...</td>
                    </tr>
                @endif
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->no_telp }}</td>
                        <td class="text-center">
                            <a href="{{ route('customer.edit', $customer->id) }}"><i class="fa fa-pen text-yellow-400"></i></a>
                            <a href="{{ route('customer.delete', $customer->id) }}"><i class="fa fa-trash text-red-500"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
