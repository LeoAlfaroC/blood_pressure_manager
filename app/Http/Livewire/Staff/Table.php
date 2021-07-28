<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Table extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Email')
                ->sortable()
                ->searchable(),
            Column::make('Role', 'roles.name')
                ->sortable()
                ->searchable(),
            Column::make('Actions'),
        ];
    }

    public function query(): Builder
    {
        return User::with('roles');
    }

    public function rowView(): string
    {
        return 'livewire.staff.table.row';
    }
}
