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
			
			$this->call([
				rolesSeeder::class,
				CountrySeeder::class,
				OfficeSeeder::class,
				PositionSeeder::class
			]);
			
			factory(User::class)->create([
				'email'       => 'admin@koloxo.test',
				'position_id' => 3
			])->roles()->attach(1);
			
			for ($i = 1; $i < 6; $i++) {
				factory(User::class)->create([
					'email'       => "user$i@koloxo.test",
					'position_id' => $i
				]);
			}
		}
	}
