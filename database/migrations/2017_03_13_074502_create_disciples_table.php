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
            $table->string('address');
            $table->date('phyBirth');
            $table->date('spiBirth');
            $table->string('school');
            $table->string('company');
            $table->string('saved')->default('NO');
            $table->string('pre_enc')->default('NO');
            $table->string('enc')->default('NO');
            $table->string('post_enc')->default('NO');
            $table->string('solOne')->default('NO');
            $table->string('solTwo')->default('NO');
            $table->string('solThree')->default('NO');
            $table->string('bapt')->default('NO');
            $table->string('isFirstGen');            
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
