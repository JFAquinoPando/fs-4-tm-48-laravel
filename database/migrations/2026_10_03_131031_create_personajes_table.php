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
    /* nombre TEXT NOT NULL,
  alias TEXT,
  estatura REAL DEFAULT 0,
  imagen TEXT,
  especies TEXT,
  genero TEXT,
  edad INTEGER DEFAULT 0,
  vivo INTEGER DEFAULT 1,
  lugarNacimiento TEXT,
  residencia TEXT, */
    {
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("alias");
            $table->float("estatura");
            $table->string("imagen");
            $table->string("especies");
            $table->string("genero");
            $table->integer("edad")->default(0);
            $table->integer("vivo")->default(1);
            $table->string("lugarNacimiento");
            $table->string("residencia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
