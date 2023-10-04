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
        Schema::create('exprimer_report', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('id_entreprise')->nullable();
            $table->timestamps();

            $table->foreign('id_entreprise')->references('id')->on('entreprises')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exprimer_report');
    }
};
