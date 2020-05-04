<?php
	
	/** @var Factory $factory */
	
	use App\User;
	use Carbon\Carbon;
	use Faker\Generator as Faker;
	use Illuminate\Database\Eloquent\Factory;
	use Illuminate\Support\Str;
	
	/*
	|--------------------------------------------------------------------------
	| Model Factories
	|--------------------------------------------------------------------------
	|
	| This directory should contain each of the model factory definitions for
	| your application. Factories provide a convenient way to generate new
	| model instances for testing / seeding your application's database.
	|
	*/
	
	$factory->define(User::class, function (Faker $faker) {
		return [
			'last_name'      => $faker->lastName,
			'first_name'     => $faker->firstName,
			'gender'         => rand(0, 1),
			'birth'          => Carbon::now()->subYears(25),
			'avatar'         => "avatar/001.png",
			'phone'          => "+212611223344",
			'office_id'      => 1,
			'creator_id'     => 1,
			'email'          => $faker->unique()->safeEmail,
			'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'remember_token' => Str::random(10),
		];
	});
