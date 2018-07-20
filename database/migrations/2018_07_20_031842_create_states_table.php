<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_document');
            $table->unsignedInteger('id_handler');
            $table->text('file')->nullable();
            $table->integer('status');
            $table->text('note')->nullable();
            $table->date('deadline')->nullable();
            $table->timestamps();
            $table->foreign('id_document')
            ->references('id')->on('documents')
            ->onDelete('cascade');
            // $table->foreign('id_handler')
            // ->references('id')->on('users')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
