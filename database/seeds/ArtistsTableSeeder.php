<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class ArtistsTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		  $faker = Faker\Factory::create();

		  for($i = 0; $i <= 500; $i++) {
			  $artist = new Artist();
			  $artist->artist_name = $faker->name;
			  $artist->email = $faker->email;
			  $artist->bio = $faker->paragraph;
			  $artist->created_by = \App\User::all()->random()->id;
			  $artist->save();
		  }
	}
}
