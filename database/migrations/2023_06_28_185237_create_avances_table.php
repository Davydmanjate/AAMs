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
        Schema::create('avances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custum_id');
            $table->unsignedBigInteger('case_id');
            $table->foreignID('layer_id')->constrained();
            $table->string('status');
            $table->timestamps();

            $table->foreign('custum_id')
            ->references('id')
            ->on('custums')
            ->onDelete('cascade');

            $table->foreign('case_id')
            ->references('id')
            ->on('cases')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avances');
    }
};
