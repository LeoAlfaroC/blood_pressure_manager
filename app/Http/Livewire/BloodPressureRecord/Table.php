<?php

namespace App\Http\Livewire\BloodPressureRecord;

use App\Models\BloodPressureRecord;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Table extends DataTableComponent
{
    public Patient $patient;
    public $date;
    public $diastolic;
    public $systolic;
    public $pulse;
    public $observations;

    protected $rules = [
        'date' => ['required', 'date'],
        'diastolic' => ['required', 'integer', 'min:1'],
        'systolic' => ['required', 'integer', 'min:1'],
        'pulse' => ['required', 'integer', 'min:1'],
        'observations' => ['nullable', 'string'],
    ];

    public function query(): Builder
    {
        return BloodPressureRecord::where('patient_id', $this->patient->id)->orderBy('date', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Date', 'date')
                ->sortable()
                ->searchable(),
            Column::make('Diastolic', 'diastolic')
                ->sortable()
                ->searchable(),
            Column::make('Systolic', 'systolic')
                ->sortable()
                ->searchable(),
            Column::make('Pulse', 'pulse')
                ->sortable()
                ->searchable(),
            Column::make('Observations', 'observations')
                ->sortable()
                ->searchable(),
            Column::make('Actions'),
        ];
    }

    public function rowView(): string
    {
        return 'livewire.bloodpressure.table.row';
    }

    public function modalsView(): string
    {
        return 'livewire.bloodpressure.table.modal';
    }

    public function setTableRowAttributes($row): array
    {
        return [
            'x-data' => "{
                edit: false,
                deleteConfirmation: false,
                id: $row->id,
                diastolic: $row->diastolic,
                systolic: $row->systolic,
                pulse: $row->pulse,
                observations: '$row->observations',
            }",
        ];
    }

    public function save()
    {
        $this->validate();

        $record = new BloodPressureRecord;
        $record->patient_id = $this->patient->id;
        $record->date = $this->date;
        $record->diastolic = $this->diastolic;
        $record->systolic = $this->systolic;
        $record->pulse = $this->pulse;
        $record->observations = $this->observations;
        $record->save();

        $this->emit('recordAdded');

        $this->date = null;
        $this->diastolic = null;
        $this->systolic = null;
        $this->pulse = null;
        $this->observations = null;

        $this->render();
    }

    public function update(int $record_id, int $diastolic, int $systolic, int $pulse, string $observations): void
    {
        $record = BloodPressureRecord::find($record_id);

        if (!$record) {
            return;
        }

        $record->diastolic = $diastolic;
        $record->systolic = $systolic;
        $record->pulse = $pulse;
        $record->observations = $observations;
        $record->save();

        $this->render();
    }

    public function delete(int $record_id): void
    {
        $record = BloodPressureRecord::find($record_id);

        if ($record) {
            $record->delete();
        }

        $this->render();
    }
}
