<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotDiscipleProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_disciple_process', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->references('id')->on('batch')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('disciple_id')->references('id')->on('disciples')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pivot_disciple_process');
    }
}
