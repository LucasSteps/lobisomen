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
        Schema::create('develops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('age')->max(2);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->text('img');
            $table->string('github', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('develops');
    }
};
