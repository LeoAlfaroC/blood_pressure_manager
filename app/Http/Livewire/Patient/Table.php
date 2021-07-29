<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Table extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('First Name', 'first_name')
                ->sortable()
                ->searchable(),
            Column::make('Last Name', 'last_name')
                ->sortable()
                ->searchable(),
            Column::make('Latest Reading', 'latestReadings')
                ->sortable(),
            Column::make('Actions'),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function rowView(): string
    {
        return 'livewire.patients.table.row';
    }
}
