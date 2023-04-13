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
        Schema::table('transports', function (Blueprint $table) {
            //
            $table->dropColumn('pour');
            $table->dropColumn('depuis');
            $table->dropColumn('date_de_départ');
            $table->dropColumn('date_arrivee');
            $table->dropColumn('heure_de_départ');
            $table->dropColumn('heure_arrivee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transports', function (Blueprint $table) {
            $table->string('depuis');
            $table->string('pour');
            $table->date('date_de_départ');
            $table->date('date_arrivee');
            $table->time('heure_de_départ');
            $table->time('heure_arrivee');
            
        });
    }


};
