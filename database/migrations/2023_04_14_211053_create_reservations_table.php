<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('clientNom');
            $table->string('clientEmail');
            $table->string('hotel_nom');
            $table->string('pays');
            $table->string('depuis');
            $table->string('pour');
            $table->date('date_de_départ');
            $table->date('date_arrivee');
            $table->time('heure_de_départ');
            $table->time('heure_arrivee');
            $table->float('prix_totale', 8, 2);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('voyage_id');
            $table->foreign('voyage_id')->references('id')->on('voyages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
