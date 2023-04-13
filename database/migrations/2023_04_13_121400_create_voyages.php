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
        Schema::create('voyages', function (Blueprint $table) {
            
            $table->id();
            $table->string('titre');
            $table->string('image')->nullable();
            $table->string('pays');
            $table->integer('nombre_place');
            $table->text('description');
            $table->float('prix', 8, 2);
            $table->string('depuis');
            $table->string('pour');
            $table->date('date_de_départ');
            $table->date('date_arrivee');
            $table->time('heure_de_départ');
            $table->time('heure_arrivee');
           
           
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')
            ->references('id')->on('hotels')
            ->onDelete('cascade');
            $table->unsignedBigInteger('transport_id');
            $table->foreign('transport_id')
            ->references('id')->on('transports')
            ->onDelete('cascade');
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
        Schema::dropIfExists('voyages');
    }
};
