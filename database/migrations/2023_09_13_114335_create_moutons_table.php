<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('moutons', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('race');
            $table->string('genealogie')->nullable();
            $table->string('photo')->nullable();
            $table->float('taille')->nullable();
            $table->float('poids')->nullable();
            $table->decimal('prix', 8, 2)->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->unsignedBigInteger('proprietaire_id')->nullable();
            $table->timestamps();

            $table->foreign('proprietaire_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moutons');
    }
};
