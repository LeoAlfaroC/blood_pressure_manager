<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->date->format('m/d/Y') }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div x-show="!edit">
        @if ($row->diastolic >= 60 && $row->diastolic <= 80)
            <span class="text-green-500 font-bold">
                   {{ $row->diastolic }}
            </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $row->diastolic }}
            </span>
        @endif
    </div>

    <div x-show="edit">
        <input type="number" step="1" min="1"
               class="appearance-none block w-20 bg-white text-gray-700 border rounded py-3 px-4 mb-0 leading-tight focus:outline-none border-gray-200 focus:border-gray-500"
               form="edit-form-{{ $row->id }}"
               x-model="diastolic">
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div x-show="!edit">
        @if ($row->systolic >= 90 && $row->systolic <= 120)
            <span class="text-green-500 font-bold">
                   {{ $row->systolic }}
            </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $row->systolic }}
            </span>
        @endif
    </div>

    <div x-show="edit">
        <input type="number" step="1" min="1"
               class="appearance-none block w-20 bg-white text-gray-700 border rounded py-3 px-4 mb-0 leading-tight focus:outline-none border-gray-200 focus:border-gray-500"
               form="edit-form-{{ $row->id }}"
               x-model="systolic">
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div x-show="!edit">
        @if ($row->pulse >= 60 && $row->pulse <= 100)
            <span class="text-green-500 font-bold">
                   {{ $row->pulse }}
            </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $row->pulse }}
            </span>
        @endif
    </div>

    <div x-show="edit">
        <input type="number" step="1" min="1"
               class="appearance-none block w-20 bg-white text-gray-700 border rounded py-3 px-4 mb-0 leading-tight focus:outline-none border-gray-200 focus:border-gray-500"
               form="edit-form-{{ $row->id }}"
               x-model="pulse">
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div x-show="!edit">
        {{ $row->observations }}
    </div>

    <div x-show="edit">
        <textarea
            class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-0 leading-tight focus:outline-none border-gray-200 focus:border-gray-500"
            form="edit-form-{{ $row->id }}"
            x-model="observations"></textarea>
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div class="flex space-x-2 -my-1">
        <div x-show="!deleteConfirmation && !edit" class="mx-0">
            <button
                class="text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                @click="edit = true"
            >
                Edit
            </button>
            <button
                class="text-sm bg-red-300 hover:bg-red-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                @click="deleteConfirmation = true"
            >
                Delete
            </button>
        </div>

        <div x-show="deleteConfirmation" style="margin-left: 0" x-cloak>
            <button
                class="text-sm bg-red-300 hover:bg-red-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                wire:click="delete({{ $row->id }})"
            >
                Confirm
            </button>
            <button
                class="text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                @click="deleteConfirmation = false"
            >
                Cancel
            </button>
        </div>

        <div x-show="edit" style="margin-left: 0" x-cloak>
            <form id="edit-form-{{ $row->id }}"
                  @submit.prevent="$wire.update(id, diastolic, systolic, pulse, observations); edit = false;"></form>
            <button
                class="text-sm bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                type="submit"
                form="edit-form-{{ $row->id }}"
            >
                Save
            </button>
            <button
                class="text-sm bg-gray-300 hover:bg-gray-500 text-gray font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                @click="edit = false"
            >
                Cancel
            </button>
        </div>
    </div>
</x-livewire-tables::table.cell>
