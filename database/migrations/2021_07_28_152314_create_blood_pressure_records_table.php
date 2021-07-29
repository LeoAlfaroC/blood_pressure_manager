<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodPressureRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_pressure_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('date');
            $table->integer('systolic');
            $table->integer('diastolic');
            $table->integer('pulse');
            $table->string('observations')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_pressure_records');
    }
}
