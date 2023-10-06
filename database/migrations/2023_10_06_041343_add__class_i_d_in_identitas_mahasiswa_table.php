<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('identitas_mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id')->after('NPM');
        $table->foreign('class_id')->references('id')->on('identitas_tabel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('identitas_mahasiswa', function (Blueprint $table) {
            $table->dropColumn('class_id');
        });
    }
};
