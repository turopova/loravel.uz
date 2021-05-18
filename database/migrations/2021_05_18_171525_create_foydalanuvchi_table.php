<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoydalanuvchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foydalanuvchi', function (Blueprint $table) {
            $table->id();
            $table->string('ism',30);
            $table->string('familya',30);
            $table->string('o_ism',30);
            $table->date('togilgan_sana');
            $table->string('passport',9);
            $table->string('karta_raqam',14);
            $table->string('rasm',50);
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
        Schema::dropIfExists('foydalanuvchi');
    }
}
