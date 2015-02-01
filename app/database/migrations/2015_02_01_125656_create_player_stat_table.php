<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_stat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('player_id');
			$table->integer('game_id');
			$table->integer('stat_type_id');
			$table->integer('attempt');
			$table->integer('success');
			$table->float('percentage');
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
		Schema::drop('player_stat');
	}

}
