<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->string('cat_id');
            $table->string('sub_cat_id');
            $table->integer('jumlah');
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->integer('harga');
            $table->integer('ditampilkan');
            $table->integer('status');
            $table->string('add_user_id');
            $table->string('updated_user_id')->nullable();
            $table->mediumText('img_produk')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
