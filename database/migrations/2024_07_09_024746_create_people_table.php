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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('Type',['Persona Natural','Empresa','Proveedor'])->notnullable();
            $table->string('First_Name',50)->notnullable();
            $table->string('Last_Name',50)->notnullable();
            $table->enum('Document_Type',['CC','TI','Pasaporte','Nit'])->nullable();
            $table->string('Document_Number',20)->nullable();
            $table->string('Adress',100)->nullable();
            $table->string('Phone',20)->nullable();
            $table->string('Email',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
