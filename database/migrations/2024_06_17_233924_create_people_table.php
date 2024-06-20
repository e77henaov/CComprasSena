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
            $table->enum('type',['Persona Natural','Empresa'])->notNullable();
            $table->string('First_Name',50)->notNullable();
            $table->string('Last_Name',50)->notNullable();
            $table->enum('Document_type',['CC','TI','Pasaporte','Nit'])->notNullable();
            $table->string('Document_Number',20)->notNullable();
            $table->string('Adress',100)->notNullable();
            $table->string('Phone',20)->notNullable();
            $table->string('Email',50)->notNullable();
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
