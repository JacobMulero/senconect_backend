<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('periferico', function(Blueprint $table) {
			$table->foreign('coordinador_id')->references('id')->on('coordinador')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('grupo_elementos', function(Blueprint $table) {
			$table->foreign('grupo_id')->references('id')->on('grupo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('periferico', function(Blueprint $table) {
			$table->dropForeign('periferico_coordinador_id_foreign');
		});
		Schema::table('grupo_elementos', function(Blueprint $table) {
			$table->dropForeign('grupo_elementos_grupo_id_foreign');
		});
	}
}