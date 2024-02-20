@extends('layouts.app')
@section('content')
    <div class="w-screen h-screen grid place-items-center">
        <div>
            <h1 class="text-xl font-bold text-center">Login {{ config('app.name', 'Laravel') }}</h1>
            <input class="px-2 py-1 mt-3 outline-none border" type="email" name="email" placeholder="Email">
        </div>
    </div>
@endsection
