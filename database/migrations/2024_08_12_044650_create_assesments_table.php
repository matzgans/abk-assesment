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
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->default('unknown');
            $table->foreignId('teacher_id')->constrained('teachers')->default('unknown');
            $table->foreignId('assesment_item_template_id')->constrained('assesment_item_templates')->default('unknown');
            $table->enum('score', [0, 1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesments');
    }
};
