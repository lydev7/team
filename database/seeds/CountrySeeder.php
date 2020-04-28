<?php
	
	use App\Country;
	use Illuminate\Database\Seeder;
	
	class CountrySeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			$countries = ['Spain', 'Morocco', 'Egypt'];
			foreach ($countries as $country) {
				Country::create([
					'name' => $country
				]);
			}
		}
	}
