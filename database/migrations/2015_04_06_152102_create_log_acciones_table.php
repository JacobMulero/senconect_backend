<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogAccionesTable extends Migration {

	public function up()
	{
		Schema::create('log_acciones', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('loggable_type', 150);
			$table->integer('loggable_id')->unsigned();
			$table->integer('accion');
			$table->string('codigo_respuesta');
			$table->string('mensaje');
		});
	}

	public function down()
	{
		Schema::drop('log_acciones');
	}
}