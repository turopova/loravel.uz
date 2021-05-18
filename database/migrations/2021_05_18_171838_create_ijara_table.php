<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIjaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijara', function (Blueprint $table) {
            $table->id();
            $table->dateTime('berish_vaqt');
            $table->dateTime('olish_vaqt');
            $table->foreignId('kitob_id');
            $table->foreignId('foydalanuvchi_id');
            $table->foreignId('xodim_id');
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
        Schema::dropIfExists('ijara');
    }
}
