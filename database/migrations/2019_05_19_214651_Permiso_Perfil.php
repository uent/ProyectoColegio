<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PermisoPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Permiso_Perfil',function(Blueprint $table){
          $table->increments('idPermisoPerfil');
          $table->integer('idPermiso')->unsigned();
          $table->foreign('idPermiso')
          ->references('idPermiso')->on('Permiso');
          //$table->string('parentesco',45);
          $table->integer('idPerfil')->unsigned();
          $table->foreign('idPerfil')
          ->references('idPerfil')->on('Perfil');
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
        //
    }
}
