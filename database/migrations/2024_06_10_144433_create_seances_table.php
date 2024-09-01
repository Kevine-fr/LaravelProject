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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prof_cours');
            $table->unsignedBigInteger('id_cas');
            $table->unsignedBigInteger('duree');
            $table->unsignedBigInteger('heure_faite');
            $table->timestamps();
            $table->foreign('id_prof_cours')->references( 'id' )->on( 'professeur_cours' )->onDelete('cascade');
            $table->foreign('id_cas')->references( 'id' )->on( 'classe_annee_scolaires' )->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
