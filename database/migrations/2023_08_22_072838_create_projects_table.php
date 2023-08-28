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
            $table->string('code', 100);
            $table->string('name');
            $table->string('genre');
            $table->text('konsep');
            $table->string('judul')->default("none");
            $table->string('lirik')->default("none");
            $table->string('harga');
            $table->integer('artist_id')->default(0);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_reject')->default(false);
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