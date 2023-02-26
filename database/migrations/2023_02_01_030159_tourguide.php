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
        Schema::create('tourguide', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('nama_wisata');
            $table->string('fp_wisata');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('email');
            $table->string('deskripsi');
            $table->string('latitude');
            $table->string('longitude');
            $table->time('jam_buka');
            $table->time('jam_tutup');
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
        //
    }
};
