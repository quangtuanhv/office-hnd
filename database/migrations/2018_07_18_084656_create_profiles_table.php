<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('avatar')->nullable();
			$table->text('address')->nullable();
			$table->boolean('gender');
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('position_id');
			$table->unsignedInteger('suite_id');
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('position_id')
            ->references('id')->on('positions')
            ->onDelete('cascade');
            $table->foreign('suite_id')
            ->references('id')->on('suites')
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
        Schema::dropIfExists('profiles');
    }
}
