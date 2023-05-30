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
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('mobile');
            $table->string('image')->nullable();
            $table->string('birthdate');
            $table->integer('status')->default(0); // [0] - pending   [1] - verified   [2] - declined
            $table->string('cor');
            $table->text('bio');
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('dept_id');
            // $table->unsignedBigInteger('crs_id');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('crs_id')
            ->constrained('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('dept_id')
            ->constrained('departments')    
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
