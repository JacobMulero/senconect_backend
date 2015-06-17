<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoordinadorTable extends Migration {

	public function up()
	{
		Schema::create('coordinador', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('ref', 250);
			$table->float('lat');
			$table->float('long');
		});
	}

	public function down()
	{
		Schema::drop('coordinador');
	}
}