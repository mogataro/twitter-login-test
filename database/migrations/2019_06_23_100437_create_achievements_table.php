<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('runner_id')->unsigned();
            $table->integer('race_count')->unsigned();
            $table->integer('rank1_count')->unsigned();
            $table->integer('rank2_count')->unsigned();
            $table->integer('rank3_count')->unsigned();
            $table->integer('rank4_count')->unsigned();
            $table->integer('rank5_count')->unsigned();
            $table->double('win_rate', 4, 3)->unsigned();
            $table->timestamps();

            // 外部キー
            $table->foreign('runner_id')->references('id')
                ->on('runners')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
