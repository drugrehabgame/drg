<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messageboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
			$table->text('message');
			$table->string('status');
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
        Schema::table('messageboards', function (Blueprint $table) {
            Schema::drop('messageboards');
        });
    }
}
