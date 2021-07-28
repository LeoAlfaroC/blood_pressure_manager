<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->name }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->email }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->roles->first()->name }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <a class="text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
       href="{{ route('staff.edit', $row->id) }}"
    >
        Edit
    </a>
</x-livewire-tables::table.cell>

