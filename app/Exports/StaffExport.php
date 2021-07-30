<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StaffExport implements FromQuery, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Role',
        ];
    }

    public function query()
    {
        return User::with('roles');
    }

    public function map($row): array
    {
        return [
            $row->name,
            $row->email,
            $row->roles->first()->name,
        ];
    }
}
