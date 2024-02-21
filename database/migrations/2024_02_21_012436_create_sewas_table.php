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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->string('id_siswa');
            $table->string('nip');
            $table->unsignedBigInteger('kendaraan');
            $table->foreign('kendaraan')->references('id')->on('kendaraans')->onDelete('cascade');
            $table->string('tujuan');
            $table->string('jumlah_hari');
            $table->string('total_sewa');
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
        Schema::dropIfExists('sewas');
    }
};
