<?php
	
	use App\Office;
	use Illuminate\Database\Seeder;
	
	class OfficeSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			
			$data = [
				'name'          => "Office",
				'logo'          => "logo/001.png",
				'phone'         => "+212522003322",
				'address1'      => "BD Address n°1 étage 1",
				'address2'      => "App n° 5 Casablanca",
				'country_id'    => 2,
				'creator_id'    => 1
			];
			
			Office::create($data);
		}
	}
