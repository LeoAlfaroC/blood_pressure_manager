@extends('layouts.dashboard')

@section('title', 'Staff')

@section('content')
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Edit Practice Staff User
    </h2>

    <div class="mx-auto">
        <livewire:staff.edit :user="$user" />
    </div>
@endsection
