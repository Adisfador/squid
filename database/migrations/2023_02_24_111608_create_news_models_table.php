<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_models', function (Blueprint $table) {
            $table->id();
            $table->string("time");
            $table->string("title");
            $table->string("newsType");
            $table->string("mainImg");
            $table->text("miniText");
            $table->text("mainText");
            $table->boolean("imgCheck");
            $table->string("titleUrl");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_models');
    }
}
