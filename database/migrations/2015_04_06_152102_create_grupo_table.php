<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoTable extends Migration {

	public function up()
	{
		Schema::create('grupo', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nombre', 250);
		});
	}

	public function down()
	{
		Schema::drop('grupo');
	}
}