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
        Schema::create('professeur_cours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_professeur');
            $table->unsignedBigInteger('id_cours');
            $table->timestamps();
            $table->foreign('id_professeur')->references( 'id' )->on( 'professeurs' )->onDelete('cascade');
            $table->foreign('id_cours')->references( 'id' )->on( 'cours' )->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeur_cours');
    }
};
