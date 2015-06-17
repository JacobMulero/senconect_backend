<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadoTable extends Migration {

	public function up()
	{
		Schema::create('estado', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('statusable_type', 150);
			$table->integer('statusable_id')->unsigned();
			$table->integer('estado')->default('0');
			$table->text('estado_mensaje');
		});
	}

	public function down()
	{
		Schema::drop('estado');
	}
}