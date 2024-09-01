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
        Schema::create('annee_scolaires', function (Blueprint $table) {
            $table->id();
            $table->date('date_de_debut');
            $table->date('date_de_fin');
            $table->unsignedBigInteger('id_pedagogie');
            $table->timestamps();
            $table->foreign('id_pedagogie')->references( 'id' )->on( 'pedagogies' )->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annee_scolaires');
    }
};
