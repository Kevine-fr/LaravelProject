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
        Schema::create('day_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_day');
            $table->unsignedBigInteger('id_hour');
            $table->timestamps();
            $table->foreign('id_day')->references( 'id' )->on( 'days' )->onDelete('cascade');
            $table->foreign('id_hour')->references( 'id' )->on( 'hours' )->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_hours');
    }
};
