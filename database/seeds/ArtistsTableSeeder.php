<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class ArtistsTableSeeder extends seeder
{
	public function run()
	{
		$this->realArtists();
        // $this->fakeArtists();
	}

	protected function realArtists()
	{
	   $artist = new Post();
 	   $artist->artist_name = 'Bobby Tables';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Best Producer DOA';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = '';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2'; 	   
 	   $artist->image = 'bobbytables.jpeg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Cydnie Garcia';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Internationally based musician, model and designer with a different take on the traditional design palette. Using multiple mediums to create whimsical yet aesthetically pleasing designs that you wouldn\'t find in store. All designs are one of kind custom pieces made by hand that are sure to make heads turn just like her music';
 	   $artist->genre = 'Pop, Model, Designer';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/cydnieg/';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2'; 	   
 	   $artist->image = 'cydniegarcia.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Taylor Gonzales';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Born and raised in San Antonio, TX, Taylor is poised to continue her dominant run in the modeling industry and farther pursue her passion in music. An incredibly talented individual in all creative areas. She is certain to make any event a success.';
 	   $artist->genre = 'Pop, Model';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = '';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2'; 	   
 	   $artist->image = 'taylor.jpg';
 	   $artist->save();
	}

	// protected function fakeArtists()
	// {
	// 	  $faker = Faker\Factory::create();

	// 	  for($i = 0; $i <= 500; $i++) 
	// 	  {
	// 		  $artist = new Artist();
	// 		  $artist->artist_name = $faker->name;
	// 		  $artist->email = $faker->email;
	// 		  $artist->bio = $faker->paragraph;
	// 		  $artist->created_by = \App\User::all()->random()->id;
	// 		  $artist->save();
	// 	  }
	// }
}
