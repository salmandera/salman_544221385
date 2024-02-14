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
        Schema::create('buku', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->char('kode_buku');
        $table->string('harga_buku')->nullable();
        $table->timestamps();
    });

}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('buku');
    }
};
