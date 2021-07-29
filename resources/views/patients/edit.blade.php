@extends('layouts.dashboard')

@section('title', 'Patients')

@section('content')
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Edit Patient
    </h2>

    <div class="mx-auto">
        <livewire:patient.edit :patient="$patient" />
    </div>
@endsection
