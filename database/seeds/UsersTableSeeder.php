<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$this->realUsers();
        $this->fakeUsers();
	}

	 protected function realUsers()
    {
 	   $user = new \App\User();
 	   $user->name = 'John';
 	   $user->email = 'johnwatts@gmx.com';
 	   $user->password = 'password';
 	   $user->artist = '0';
 	   $user->save();

 	   $user = new \App\User();
 	   $user->name = 'Jeran Smith';
 	   $user->email = 'smithtalent.mgmt@gmail.com';
 	   $user->password = 'password';
 	   $user->artist = '1';
 	   $user->save();

 	   $user = new \App\User();
 	   $user->name = 'Lyor Cohen';
 	   $user->email = 'lyorcohent@300ent.com';
 	   $user->password = 'password';
 	   $user->artist = '1';
 	   $user->save();
    }

	 protected function fakeUsers()
    {
        $faker = Faker\Factory::create();

		for($i = 0; $i <= 50; $i++) {
			$user = new \App\User();
			$user->name = $faker->name;
			$user->email = $faker->email;
			$user->password = bcrypt('password');
			$user->save();
			}
    }
}
