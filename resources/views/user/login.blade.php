@extends('layouts.app')
@section('content')
    <div class="w-screen h-screen grid place-items-center">
        <form action="{{ route('user.login.store') }}" method="post">
            @csrf
            <h1 class="text-xl font-bold text-center">Login {{ config('app.name', 'Laravel') }}</h1>
            <input class="px-2 py-1 mt-3 outline-none border" type="email" name="email" placeholder="Email">
            <br>
            <input class="px-2 py-1 mt-3 outline-none border" type="password" name="password" placeholder="Password">
            <br>
            <div class="grid place-items-center">
                <button class="bg-blue-400 px-3 py-1 mt-2" type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection
