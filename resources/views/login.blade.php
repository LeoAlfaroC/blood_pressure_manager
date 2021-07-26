@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="table h-screen mx-auto">
        <div class="table-cell align-middle">
            <form method="post" action="{{ route('login.attempt') }}"
                  class="bg-white shadow-md rounded border px-8 pt-6 pb-8 mb-4">
                @csrf

                @if (session()->has('failure'))
                    <div class="text-center text-red-500">
                        {{ session('failure') }}
                    </div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="appearance-none shadow border rounded w-full py-2 px-3 mb-2">
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="appearance-none shadow border rounded w-full py-2 px-3 mb-2">
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
            </form>
        </div>
    </div>
@endsection
