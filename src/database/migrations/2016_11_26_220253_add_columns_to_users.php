<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('cnp', 13)->nullable()->after('remember_token');
            $table->enum('role', ['admin', 'doctor'])->after('cnp')->nullable();
            $table->unsignedInteger('institution_id')->after('role')->nullable();
            $table->foreign('institution_id')->references('id')->on('institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cnp');
            $table->dropColumn('role');
            $table->dropColumn('institution_id');
        });
    }
}
