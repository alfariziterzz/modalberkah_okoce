<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesjidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesjid', function (Blueprint $table) {
            $table->id(); // Ini sudah termasuk kolom auto_increment dan primary key
            $table->char('ref', 36);
            $table->string('nama', 100);
            $table->string('email')->nullable(); // Hapus auto_increment dan primary key dari kolom ini
            $table->integer('provinsi')->nullable();
            $table->integer('kabupaten')->nullable();
            $table->text('alamat')->nullable();
            $table->string('link', 100)->nullable();
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();
            $table->integer('status')->nullable();
            $table->string('nama_1', 100)->nullable();
            $table->string('sebagai_1', 100)->nullable();
            $table->string('no_tlp_1', 20)->nullable();
            $table->string('nama_2', 100)->nullable();
            $table->string('sebagai_2', 100)->nullable();
            $table->string('no_tlp_2', 20)->nullable();
            $table->string('nama_3', 100)->nullable();
            $table->string('sebagai_3', 100)->nullable();
            $table->string('no_tlp_3', 20)->nullable();
            $table->string('nama_4', 100)->nullable();
            $table->string('sebagai_4', 100)->nullable();
            $table->string('no_tlp_4', 20)->nullable();
            $table->string('files', 100)->nullable();
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
        Schema::dropIfExists('mesjid');
    }
}