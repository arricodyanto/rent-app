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
        Schema::create('m_kendaraans', function (Blueprint $table) {
            $table->bigIncrements('id_kendaraan');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('Users')->onDelete('cascade');
            $table->string('merk', 20);
            $table->string('jenis', 24);
            $table->string('nama', 40);
            $table->string('nopol', 13);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kendaraans');
    }
};
