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
        Schema::create('grown_bookings', function (Blueprint $table) {
            $table->id();
            $table->date('booking_date');
            $table->string('name');
            $table->string('phonenumber');
            $table->foreignId('graduation_grownsID')->references('id')->on('graduation_growns')->onDelete('cascade');
            $table->foreignId('dammy_sims_resultsID')->references('id')->on('dammy_sims_results')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grown_bookings');
    }
};
