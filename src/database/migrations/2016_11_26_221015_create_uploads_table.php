<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('path', 200)->nullable();
            $table->unsignedSmallInteger('ignored_patients')->nullable();
            $table->unsignedSmallInteger('ignored_tests')->nullable();
            $table->unsignedSmallInteger('valid_patients')->nullable();
            $table->unsignedSmallInteger('valid_tests')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}
