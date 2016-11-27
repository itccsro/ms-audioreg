<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cnp', 13)->nullable()->index();
            $table->unsignedInteger('upload_id')->nullable()->index();
            $table->uuid('unique_id')->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['female', 'male'])->nullable();
            $table->string('telephone', 15)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->string('mothers_first_name', 50)->nullable();
            $table->string('mothers_last_name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('comment', 5000)->nullable();
            $table->string('not_screened_reasons', 200)->nullable();
            $table->string('risk_factors_presence', 200)->nullable();
            $table->string('le_abr_result', 50)->nullable();
            $table->string('re_abr_result', 50)->nullable();
            $table->string('le_te_result', 50)->nullable();
            $table->string('re_te_result', 50)->nullable();
            $table->string('le_dp_result', 50)->nullable();
            $table->string('re_dp_result', 50)->nullable();
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
        Schema::dropIfExists('screenings');
    }
}
