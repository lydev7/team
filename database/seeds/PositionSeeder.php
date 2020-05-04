<?php
	
	use App\Position;
	use Illuminate\Database\Seeder;
	
	class PositionSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			$positions = ['CEO', 'Manager', 'IT', 'Moderator', 'RH'];
			
			foreach ($positions as $position) {
				Position::create([
					'name'       => $position,
					'creator_id' => 1
				]);
			}
		}
	}
