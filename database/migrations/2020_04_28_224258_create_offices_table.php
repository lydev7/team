<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name',45)->unique();
            $table->string('logo')->nullable();
            $table->string('phone',25);
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->unsignedBigInteger('country_id')
	            ->index();
            $table->foreign('country_id')
	            ->references('id')
	            ->on('countries');
            $table->unsignedBigInteger('creator_id')->index();
            $table->foreign('creator_id')
	            ->references('id')
	            ->on('users');
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
        Schema::dropIfExists('offices');
    }
}
