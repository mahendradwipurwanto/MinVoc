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
        Schema::create('notifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artis_id')->nullable();
            $table->string('title');
            $table->text('message')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->boolean('is_reject')->default(false);
            $table->timestamps();

            $table->foreign('artis_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifs');
    }
};
