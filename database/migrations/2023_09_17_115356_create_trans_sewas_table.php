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
        Schema::create('trans_sewas', function (Blueprint $table) {
            $table->bigIncrements('id_sewa');
            $table->unsignedBigInteger('id_titip');
            $table->foreign('id_titip')->references('id_titip')->on('trans_titips')->onDelete('cascade');
            $table->date('tgl_awal');
            $table->date('tgl_akhir')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_sewas');
    }
};
