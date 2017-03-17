<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $t){

            $t->increments('id')-> unsigned();
            $t->string('nombre', 50);
            $t->string('interes');
            $t->string('email');
            $t->string('lugar_origen');
            $t->integer('tel_casa');
            $t->integer('tel_cel');
            $t->string('esc_proc');
            $t->string('no_esta', 50);
            $t->string('carr_1');
            $t->string('carr_2');
            $t->string('desea_inf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
