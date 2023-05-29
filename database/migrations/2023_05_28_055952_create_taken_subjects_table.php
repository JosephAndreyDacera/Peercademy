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
        Schema::create('taken_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutorID')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('tuteeID')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('subjectID')
            ->constrained('subjects')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('status')->default(1);//[1] requested [2] accepted  [3] completed
            $table->integer('rate')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taken_subjects');
    }
};
