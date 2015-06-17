<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoElementosTable extends Migration {

	public function up()
	{
		Schema::create('grupo_elementos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('grupo_id')->unsigned();
			$table->string('grupable_type', 150);
			$table->integer('grupable_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('grupo_elementos');
	}
}