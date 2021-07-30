<?php

namespace App\Exports;

use App\Models\Patient;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PatientExport implements FromQuery, WithHeadings, WithMapping
{

    public function query()
    {
        return Patient::query();
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Birthday',
            'Medical History',
            'Allergies',
            'Family Background',
        ];
    }

    public function map($row): array
    {
        return [
            $row->first_name,
            $row->last_name,
            $row->email,
            $row->birthday->format('m/d/Y'),
            $row->medical_history,
            $row->allergies,
            $row->family_background,
        ];
    }
}
