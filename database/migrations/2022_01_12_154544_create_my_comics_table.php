<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->text("description", 255);
            $table->char("thumbs", 255);
            $table->float("price", 8, 2);
            $table->string("series", 100);
            $table->year("date");
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
        Schema::dropIfExists('my_comics');
    }
}
