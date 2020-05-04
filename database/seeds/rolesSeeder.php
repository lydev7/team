<?php
	
	use App\Role;
	use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['position'];
	    foreach ($roles as $role) {
		    Role::create([
		    	'role' => $role
		    ]);
        }
    }
}
