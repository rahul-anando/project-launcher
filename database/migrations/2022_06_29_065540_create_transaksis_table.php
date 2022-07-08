<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cost');
            $table->char('alamat');
            $table->char('nama_petugas');
            $table->date('selesai');
            $table->string('jenis_laundry');
            $table->integer('total_berat');
            $table->integer('total_biaya');
            $table->string('status_pembayaran');
            $table->string('diskon_member');
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
        Schema::dropIfExists('transaksis');
    }
}
