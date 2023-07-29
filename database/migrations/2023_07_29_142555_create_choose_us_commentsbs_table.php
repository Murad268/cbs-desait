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
        Schema::create('choose_us_commentsbs', function (Blueprint $table) {
            $table->id();
            $table->string('chose_us_img');
            $table->string('chose_us_comment');
            $table->string('chose_us_name');
            $table->string('chose_us_position');
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
        Schema::dropIfExists('choose_us_commentsbs');
    }
};
