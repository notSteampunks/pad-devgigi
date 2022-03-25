<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orangtua')->nullable();
            $table->unsignedBigInteger('id_sekolah')->nullable();
            $table->string('nama')->nullable();
            $table->datetime('tanggal_lahir')->nullable();
            $table->string('kelas')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_orangtua')->references('id')->on('orangtua')->onDelete('cascade');
            $table->foreign('id_sekolah')->references('id')->on('sekolah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anak');
    }
}
