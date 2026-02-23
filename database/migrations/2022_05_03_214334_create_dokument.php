<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokument', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_dokument');
            $table->string('nama_dokument');
            $table->string('data_file');
            $table->text('keterangan')->nullable();
            $table->integer('dokument_jenis_id');
            $table->integer('dokument_group_id');
            $table->enum('aktif', ['Y', 'N'])->default('Y');
            $table->integer('users_id');
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
        Schema::dropIfExists('dokument');
    }
}