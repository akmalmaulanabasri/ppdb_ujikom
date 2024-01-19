<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn')->unique();
            $table->string('user_id')->unique();
            $table->enum('jenis_kelamin',[
                'Laki-laki',
                'Perempuan'
            ]);
            $table->string('nama_lengkap');
            $table->string('asal_sekolah');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->string('pdf_file')->nullable();
            $table->string('referensi');
            $table->boolean('status_pembayaran');
            $table->string('payment_id')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('calon_siswa');
    }
};
