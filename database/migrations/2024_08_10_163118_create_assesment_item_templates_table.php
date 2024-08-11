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
        Schema::create('assesment_item_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assesment_template_id')->constrained("assesment_templates")->default('unknown');
            $table->string("assesment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesment_item_templates');
    }
};
