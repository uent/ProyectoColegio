<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPerfilUsuario extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('Perfil_Usuario',function(Blueprint $table){
          $table->increments('idPerfilUsuario');
          $table->integer('idPerfil')->unsigned();
          $table->foreign('idPerfil')
          ->references('idPerfil')->on('Perfil');

          $table->integer('idUsuario')->unsigned();
          $table->foreign('idUsuario')
          ->references('idUsuario')->on('Usuario');


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
    Schema::dropIfExists('Niños');
      Schema::dropIfExists('OrdenDiagnostico');
  }
}
