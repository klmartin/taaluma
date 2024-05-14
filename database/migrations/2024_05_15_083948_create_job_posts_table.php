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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location')->nullable();
            $table->foreignId('category')->constrained('categories');
            $table->foreignId('company')->constrained('companies');
            $table->enum('nature', ['full time', 'part time'])->nullable();
            $table->date('deadline');
            $table->string('salary')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('description')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('qualification')->nullable();
            $table->string('apply_link')->nullable();
            $table->string('apply_instrutions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
