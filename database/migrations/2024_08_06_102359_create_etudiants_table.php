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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->integer('telephone')->unique();
            $table->string('matricule')->unique();
            $table->string('email');
            $table->string('date_de_naissace');
            $table->string('photo');
            $table->timestamps();
            $table->softDeletes(); // Ajoutez cette ligne
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
