<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('trichyeu');
            $table->string('kihieu');
            $table->integer('id_loaivanban');
            $table->integer('id_sovanban');
            $table->date('ngayden')->nullable();
            $table->date('ngaybanhanh');
            $table->date('ngaycohieuluc')->nullable();
            $table->date('ngayhethieuluc')->nullable();
            $table->string('coquanbanhanh');
            $table->string('nguoiky')->nullable();
            $table->string('linhvuc')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('tepdinhkem');
            $table->string('noidung')->nullable();
            $table->integer('nguoisoan');// lấy tên ko đc lấy id vì khi khóa thì nó sẽ
            $table->integer('status');
            $table->integer('vanbanden');//1= văn bản đến  2= văn bản đi
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
        Schema::dropIfExists('documents');
    }
}
