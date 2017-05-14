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

          $table->integer('id')->unsigned();
          $table->foreign('id')
          ->references('id')->on('Users');


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
    Schema::dropIfExists('Ninos');
      Schema::dropIfExists('OrdenDiagnostico');
  }
}
