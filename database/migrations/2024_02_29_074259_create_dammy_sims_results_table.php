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
        Schema::create('dammy_sims_results', function (Blueprint $table) {
            $table->id();
            $table->string('student_number');
            $table->string('Development_Studies');
            $table->string('Electronic_Commerce');
            $table->string('Database_Systems');
            $table->string('Operating_System_Administration');
            $table->string('Computerized_Accounting');
            $table->string('Data_Structure_and_Algorithms');
            $table->string('Data_Communications');
            $table->string('Mathematical_Statistics');
            $table->string('gpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dammy_sims_results');
    }
};
