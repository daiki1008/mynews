<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileHistoriesTable extends Migration
{

    public function up()
    {
        Schema::create('profilehistories', function (Blueprint $table){
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('profile_edited_at');
            $table->timestamps();
            
        });
    }
            
    public function down()
    {
        Schema::dropIfExists('profilehistories');
    }
}
