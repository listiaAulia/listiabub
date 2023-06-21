<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->text('foto');
            $table->string('nama_barang',50);
            $table->string('harga',50);
            $table->string('deskripsi',100);
            $table->timestamps();
            

            // $table->enum('type_user',['admin','member']);
            // $table->string('nama',50);
            // $table->text('alamat');
            // $table->char('no_hp',13);
            // $table->string('password',30);
            // $table->text('foto');
           
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('product');
    }
};
