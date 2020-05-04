<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name',45)->unique();
            $table->unsignedBigInteger('creator_id')->index();
            $table->timestamps();
        });
        
        Schema::table('users', function (Blueprint $table){
	        $table->unsignedBigInteger('position_id')->index();
	        $table->foreign('position_id')
		        ->references('id')
		        ->on('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
