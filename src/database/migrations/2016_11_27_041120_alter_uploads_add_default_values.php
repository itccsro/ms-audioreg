<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUploadsAddDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->unsignedSmallInteger('ignored_patients')
                ->nullable()->default(0)->change();
            $table->unsignedSmallInteger('ignored_tests')
                ->nullable()->default(0)->change();
            $table->unsignedSmallInteger('valid_patients')
                ->nullable()->default(0)->change();
            $table->unsignedSmallInteger('valid_tests')
                ->nullable()->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->unsignedSmallInteger('ignored_patients')
                ->nullable()->default(null)->change();
            $table->unsignedSmallInteger('ignored_tests')
                ->nullable()->default(null)->change();
            $table->unsignedSmallInteger('valid_patients')
                ->nullable()->default(null)->change();
            $table->unsignedSmallInteger('valid_tests')
                ->nullable()->default(null)->change();
        });
    }
}
