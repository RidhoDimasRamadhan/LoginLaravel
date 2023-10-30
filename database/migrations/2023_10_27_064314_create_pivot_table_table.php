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
        Schema::create('pivot_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // studen_id ini namanya bebas
            $table->foreign('student_id')->references('id')->on('identitas_mahasiswa')->onDelete('restrict'); // lalu untuk nama yang akan dimasukkan ini yaituberupa student_id ini merefence ke id yang bearada pada table identitas_mahasiswa yang tidak bisa di delete.
            $table->unsignedBigInteger('id_eskul');
            $table->foreign('id_eskul')->references('id')->on('eskul')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_in');
    }
};
