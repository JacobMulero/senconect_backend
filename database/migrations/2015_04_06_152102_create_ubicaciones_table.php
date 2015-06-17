<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbicacionesTable extends Migration {

	public function up()
	{
		Schema::create('ubicaciones', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nombre', 250);
			$table->string('localidad', 250)->nullable();
			$table->string('admin_area_1', 250)->nullable();
			$table->string('admin_area_2', 250);
			$table->string('pais', 250);
			$table->integer('cp')->nullable();
			$table->float('lat');
			$table->float('long');
		});
	}

	public function down()
	{
		Schema::drop('ubicaciones');
	}
}