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
        //
        $tableName = 'glowgenius';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Produk');
            $table->string('Jenis Produk');
            $table->string('Untuk Kulit');
            $table->string('Masalah Kulit');
            $table->string('Tipe Bahan Aktif');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
