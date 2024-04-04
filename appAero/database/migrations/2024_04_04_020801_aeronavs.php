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
        Schema::create('aeronavs', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('idAerolinea')->unsigned();
            $table->bigInteger('idFabricante')->unsigned();
            $table->string('nombreAeronave', 100);      
            $table->string('serie', 100)->nullable();   
            $table->boolean('estatus');    
            $table->timestamps();

            $table->foreign('idAerolinea')->references('id')->on('aerolineas')->onDelete("restrict");
            $table->foreign('idFabricante')->references('id')->on('fabricants')->onDelete("restrict");
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
