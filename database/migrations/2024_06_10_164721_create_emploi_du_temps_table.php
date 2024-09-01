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
        Schema::create('emploi_du_temps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_seance');
            $table->unsignedBigInteger('id_day_hour');
            $table->unsignedBigInteger('id_salle');
            $table->timestamps();
            $table->foreign('id_seance')->references( 'id' )->on( 'seances' )->onDelete('cascade');
            $table->foreign('id_day_hour')->references( 'id' )->on( 'hours' )->onDelete('cascade');
            $table->foreign('id_salle')->references( 'id' )->on( 'salles' )->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_du_temps');
    }
};
