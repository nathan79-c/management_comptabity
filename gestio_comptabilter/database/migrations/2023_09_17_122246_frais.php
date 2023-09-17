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
        Schema::create('frais', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->string('type');
            $table->unsignedBigInteger('etudiant_id');
            $table->timestamps();

            $table->foreign('etudiant_id')->references('id')->on('student');
        }); }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
