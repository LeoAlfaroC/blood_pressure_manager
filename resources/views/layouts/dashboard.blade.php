@extends('layouts.base')

@section('container')
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        @include('layouts.partials.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.partials.header')

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
@endsection
