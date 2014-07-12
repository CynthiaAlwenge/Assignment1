<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
		  $table->increments('id');
	      $table->string('Names');
	      $table->date('age');
	      $table->string('gender')->default('female')->nullble();
	      $table->string('country')->default('Kenya')->nullble();
	      $table->string('photo');
	      $table->string('phone');
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
	    Schema::dropIfExists('users');
	}

}
