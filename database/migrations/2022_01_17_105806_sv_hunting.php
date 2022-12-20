<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SvHunting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SvHunting', function (Blueprint $table) {
            $table->id();
            $table->string('userID');
            $table->string('title');
            $table->string('topic');
            $table->string('reason');
            $table->string('name');
            $table->string('expertise');
            $table->string('status');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
