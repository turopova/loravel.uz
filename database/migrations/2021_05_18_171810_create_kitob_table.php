<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitob', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('nashriyot',50);
            $table->integer('yil');
            $table->integer('kitob_soni');
            $table->foreignId('bolim_id');
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
        Schema::dropIfExists('kitob');
    }
}
