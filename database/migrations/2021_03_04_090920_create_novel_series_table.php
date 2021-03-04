<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_series', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('novel_id')->nullable();
            $table->foreign('novel_id')->references('id')->on('novels');
            $table->string('name');
            $table->boolean('available');
            $table->string('cover');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('novel_series');
    }
}
