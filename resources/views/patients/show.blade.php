@extends('layouts.dashboard')

@section('title', 'Patient Details')

@section('content')
    <div class="mx-auto" x-data="{ showModal: false }" x-init="() => {
        window.livewire.on('recordAdded', () => {
            showModal = false
        })
    }">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Patient Details
        </h2>

        <div class="w-2/3 mx-auto p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        First Name
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->first_name }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Last Name
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->last_name }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Birthday
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->birthday->format('m/d/Y') }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Email
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->email }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Medical History
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->medical_history ?? 'None' }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Allergies
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->allergies ?? 'None' }}
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Family Background
                    </label>
                </div>
                <div class="md:w-2/3 w-full py-2 px-4 text-gray-700 leading-tight">
                    {{ $patient->family_background ?? 'None' }}
                </div>
            </div>
        </div>

        <hr class="mt-6">

        <h2
            class="mt-6 mb-6 text-xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Blood Pressure Records

            <button
                class="float-right text-sm bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                @click="showModal = true"
            >
                Add
            </button>
        </h2>

        <livewire:blood-pressure-record.table :patient="$patient" />
    </div>
@endsection
