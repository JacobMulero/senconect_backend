<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerifericoTable extends Migration {

	public function up()
	{
		Schema::create('periferico', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->float('lat');
			$table->float('long');
			$table->string('ref', 250);
			$table->integer('coordinador_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('periferico');
	}
}