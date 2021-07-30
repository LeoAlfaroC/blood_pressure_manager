@extends('layouts.dashboard')

@section('title', 'Staff')

@section('content')
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Staff

        @can('export staff csv')
        <a class="float-right text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
           href="{{ route('staff.export') }}"
        >
            Export as CSV
        </a>
        @endcan

        <a class="float-right text-sm bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
           href="{{ route('staff.create') }}"
        >
            Add
        </a>
    </h2>

    @if (session()->has('success'))
        <div
            class="mx-auto bg-green-100 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md"
            role="alert"
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
            x-transition
        >
            <p class="font-bold">{{ session('success') }}</p>
        </div>
    @endif

    <livewire:staff.table />
@endsection
