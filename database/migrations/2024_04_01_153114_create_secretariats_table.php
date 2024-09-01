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
        Schema::create('secretariats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('is_secretariat');
            $table->timestamps();
            $table->foreign('id_personne')->references( 'id' )->on( 'users' )->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretariats');
    }
};
