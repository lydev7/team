<?php
	
	use App\User;
	use Illuminate\Database\Seeder;
	
	class DatabaseSeeder extends Seeder
	{
		/**
		 * Seed the application's database.
		 *
		 * @return void
		 */
		public function run()
		{
			// $this->call(UserSeeder::class);
			factory(User::class)->create([
				'email' => 'admin@koloxo.test'
			]);
			for ($i = 1; $i < 10; $i++)
				factory(User::class)->create([
					'email' => "user$i@koloxo.test"
				]);
		}
	}
