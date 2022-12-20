<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_documento')->constrained('tipo_documentos');
            $table->string('documento');
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rol');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
