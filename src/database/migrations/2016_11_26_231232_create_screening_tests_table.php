<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreeningTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('screening_id')->nullable()->index();
            $table->unsignedInteger('upload_id')->nullable()->index();
            $table->uuid('unique_id')->nullable();
            $table->string('test_type', 20)->nullable();
            $table->enum('ear_type', ['Left', 'Right'])->nullable();
            $table->enum('left_result', ['NotTested', 'Pass', 'Refer'])->nullable();
            $table->decimal('duration', 5, 2)->nullable();
            $table->string('test_facility', 50)->nullable();
            $table->string('device_serial_number', 20)->nullable();
            $table->string('probe_serial_number', 20)->nullable();
            $table->string('device', 20)->nullable();
            $table->dateTime('test_datetime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screening_tests');
    }
}
