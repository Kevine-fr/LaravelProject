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
        Schema::create('classe_annee_scolaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_annee_scolaire');
            $table->unsignedBigInteger('id_classe');
            $table->timestamps();
            $table->foreign('id_annee_scolaire')->references( 'id' )->on( 'annee_scolaires' )->onDelete('cascade');
            $table->foreign('id_classe')->references( 'id' )->on( 'classes' )->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe_annee_scolaires');
    }
};
