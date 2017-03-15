<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nickName');
            $table->string('gender');
            $table->string('address');
            $table->string('school');
            $table->string('company');
            $table->date('phyBirth');
            $table->string('contactNo');
            $table->string('picture');
            $table->date('spiBirth');
            $table->string('process');
            $table->string('bapt')->default('NO');
            $table->string('isFirstGen');
            $table->string('spiStatus');            
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
        Schema::dropIfExists('disciples');
    }
}
