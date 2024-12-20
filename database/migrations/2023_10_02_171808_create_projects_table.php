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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('tech_stack')->nullable();
            $table->text('logo')->nullable();
            $table->enum('visibility',['publish','private'])->nullable();
            $table->text('source_code_url')->nullable();
            $table->text('preview_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
