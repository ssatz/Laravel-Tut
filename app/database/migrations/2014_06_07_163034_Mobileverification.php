<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mobileverification extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mobileverification', function($table)
                {
                    $table->increments('id');
                    $table->unsignedInteger('user_id');
                    $table->string('verificationcode');
                    $table->foreign('user_id')
                            ->references('id')->on('users')
                            ->onDelete('cascade');
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mobileverification');
	}

}
