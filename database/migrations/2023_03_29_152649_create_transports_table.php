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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('depuis');
            $table->string('pour');
            $table->date('date_de_départ');
            $table->date('date_arrivee');
            $table->time('heure_de_départ');
            $table->time('heure_arrivee');
            $table->integer('nombre_passagers');
            $table->integer('prix');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('transports');
    }
};
