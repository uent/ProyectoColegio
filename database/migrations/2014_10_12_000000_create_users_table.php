<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut',45);
            $table->string('name');
            $table->string('apellidos',45);
            $table->string('email',60)->unique();
            $table->string('password');
            $table->string('Profesion',45);

            $table->rememberToken();
            $table->timestamps();

            //$table->string('dv',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
