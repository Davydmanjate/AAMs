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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custum_id');
            $table->string('name');
            $table->string('province');
            $table->date('audience');
            $table->string('marital_status');
            $table->string('age');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();

            $table->foreign('custum_id')
            ->references('id')
            ->on('custums')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
