<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rank1')->unsigned();//1位をとったrunnersテーブルのid
            $table->integer('rank2')->unsigned();//2位をとったrunnersテーブルのid
            $table->integer('rank3')->unsigned();//3位をとったrunnersテーブルのid
            $table->integer('rank4')->unsigned();//4位をとったrunnersテーブルのid
            $table->integer('rank5')->unsigned();//5位をとったrunnersテーブルのid
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
        Schema::dropIfExists('race_results');
    }
}
