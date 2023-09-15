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
        Schema::create('student', function(Blueprint $table){
           $table->id();
           $table->string('nom');
           $table->string('post_nom');
           $table->string('prenom');
           $table->string('email');
           $table->string('mot_de_passe');
        });
        Schema::create('frais',function(Blueprint $table){
            $table->id();
            $table->int('motant');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('promotion', function(Blueprint $table){
            $table->string('nom');
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
