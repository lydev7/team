<?php
	
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	
	class CreateUsersTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('users', function (Blueprint $table) {
				$table->id();
				$table->string('last_name', 45);
				$table->string('first_name', 45);
				$table->boolean('gender');
				$table->date('birth');
				$table->string('avatar', 191)->nullable();
				$table->string('phone', 25);
				
				$table->string('email')->unique();
				$table->string('password');
				
				$table->unsignedBigInteger('creator_id')
					->index();
				$table->foreign('creator_id')
					->references('id')
					->on('users');
				
				$table->rememberToken();
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
			Schema::dropIfExists('users');
		}
	}
