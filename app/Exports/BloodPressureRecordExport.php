<?php

namespace App\Exports;

use App\Models\BloodPressureRecord;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BloodPressureRecordExport implements FromQuery, WithHeadings, WithMapping
{
    private $patient_id;

    public function __construct(int $patient_id)
    {
        $this->patient_id = $patient_id;
    }

    public function query()
    {
        return BloodPressureRecord::where('patient_id', $this->patient_id);
    }

    public function headings(): array
    {
        return [
            'Date',
            'Diastolic',
            'Systolic',
            'Pulse',
            'Observations',
        ];
    }

    public function map($row): array
    {
        return [
            $row->date->format('m/d/Y'),
            $row->diastolic,
            $row->systolic,
            $row->pulse,
            $row->observations,
        ];
    }
}
