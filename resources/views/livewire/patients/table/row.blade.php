<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->first_name }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div>
        {{ $row->last_name }}
    </div>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    @if (!$row->latestReading->isEmpty())
        D:
        @php($diastolic = $row->latestReading->first()->diastolic)
        @if ($diastolic >= 60 && $diastolic <= 80)
            <span class="text-green-500 font-bold">
                   {{ $diastolic }}
                </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $diastolic }}
                </span>
        @endif

        S:
            @php($systolic = $row->latestReading->first()->systolic)
        @if ($systolic >= 90 && $systolic <= 120)
            <span class="text-green-500 font-bold">
                   {{ $systolic }}
                </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $systolic }}
                </span>
        @endif

        P:
        @php($pulse = $row->latestReading->first()->pulse)
        @if ($pulse >= 60 && $pulse <= 100)
            <span class="text-green-500 font-bold">
                   {{ $pulse }}
                </span>
        @else
            <span class="text-red-500 font-bold">
                   {{ $pulse }}
                </span>
        @endif
    @else
        No records available
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="table-cell">
    <div class="flex space-x-2 -my-1">
        <a class="text-sm bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
           href="{{ route('patients.show', $row->id) }}"
        >
            View
        </a>

        <a class="text-sm bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
           href="{{ route('patients.edit', $row->id) }}"
        >
            Edit
        </a>
    </div>
</x-livewire-tables::table.cell>
