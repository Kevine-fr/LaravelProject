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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->date('date_de_naissance');
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('id_pedagogie');
            $table->unsignedBigInteger('id_cas');
            $table->timestamps();
            $table->foreign('id_personne')->references( 'id' )->on( 'users' )->onDelete('cascade');
            $table->foreign('id_pedagogie')->references( 'id' )->on( 'pedagogies' )->onDelete('cascade');
            $table->foreign('id_cas')->references( 'id' )->on( 'classe_annee_scolaires' )->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
