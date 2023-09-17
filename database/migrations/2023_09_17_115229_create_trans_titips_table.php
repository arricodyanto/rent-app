<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trans_titips', function (Blueprint $table) {
            $table->bigIncrements('id_titip');
            $table->unsignedBigInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('m_kendaraans')->onDelete('cascade');
            $table->date('tgl_titip');
            $table->integer('harga_sewa')->unsigned();
            $table->date('tgl_berakhir');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_titips');
    }
};
