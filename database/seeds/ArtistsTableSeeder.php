<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class ArtistsTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$this->realArtists();
        // $this->fakeArtists();
	}

	protected function realArtists()
	{
	$artist = new Post();
  	   $artist->artist_name = 'Red Cardinal';
  	   $artist->email = 'joshuamw322@gmail.com';
  	   $artist->bio = '';
 	   $artist->location = 'San Antonio';
  	   $artist->genre = 'Rock';
  	   $artist->facebook_url = 'https://www.facebook.com/redcardinalsatx';
  	   $artist->instagram_url = 'https://www.instagram.com/redcardinalsatx/';
  	   $artist->twitter_url = '';
  	   $artist->soundcloud_url = 'https://soundcloud.com/red-cardinal-ghost';
  	   $artist->bandcamp_url = '';
  	   $artist->created_by = '2';
  	   $artist->image = 'Red Cardinal.jpg';
  	   $artist->save();

	   $artist = new Post();
 	   $artist->artist_name = 'TAYLOR';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Born and raised in San Antonio, TX, Taylor is poised to continue her dominant run in the modeling industry and farther pursue her passion in music. An incredibly talented individual in all creative areas. She is certain to make any event a success.';
	   $artist->location = 'San Antonio';
 	   $artist->genre = 'Pop, Model';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = '';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'taylor.jpg';
 	   $artist->save();


	   $artist = new Post();
 	   $artist->artist_name = 'Bobby Tables';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Best Producer DOA';
 	   $artist->genre = 'Rap, Experimental';
	   $artist->location = 'San Antonio';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = '';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'bobbytables.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Zaytoven';
 	   $artist->email = 'zaytovenbookings@gmail.com';
 	   $artist->bio = 'Xavier L. Dotson, professionally known as Zaytoven, is an American record producer, DJ, and pianist from Atlanta, Georgia. He is known for his work with Southern rap artists Gucci Mane and Migos, and has released joint projects with artists such as Future, Waka Flaka Flame, Young Scooter, Bankroll Fresh, and Young Dro.';
 	   $artist->genre = 'Rap, Producer';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/zaytovenbeatz/';
 	   $artist->twitter_url = 'https://twitter.com/zaytovenbeatz/';
 	   $artist->soundcloud_url = 'https://soundcloud.com/zaytovenbeatz';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '5';
 	   $artist->image = 'zaytoven.jpg';
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
 	   $artist->artist_name = 'Young Thug';
 	   $artist->email = 'lyorcohen@300ent.com';
 	   $artist->bio = 'Jeffery Lamar Williams (born August 16, 1991), best known professionally as Young Thug, is an American hip hop artist from Atlanta, Georgia. Known for his unconventional vocal style, fashion, and persona, he first received attention for his collaborations with fellow Southern rappers, such as Rich Homie Quan, Birdman, T.I., and Gucci Mane. Young Thug initially released a series of independent mixtapes beginning in 2011 with I Came From Nothing. In early 2013, he signed with Gucci Mane\'s 1017 Records and later that year he released his label debut mixtape 1017 Thug to critical praise. Young Thug received mainstream recognition in 2014 with the songs "Stoner" and "Danny Glover" in addition to appearances on several singles, including "About the Money" and "Lifestyle." That year, he also signed to Lyor Cohen\'s 300 Entertainment and collaborated on the mixtapes Black Portland and Rich Gang: Tha Tour Pt. 1. In 2015, he released a number of mixtapes, including Barter 6 and two installments of his Slime Season series. These were followed in 2016 by the mixtapes I\'m Up, Slime Season 3, and Jeffery in anticipation of his long-delayed debut studio album.';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = 'https://www.facebook.com/youngthugmusic/';
 	   $artist->instagram_url = 'https://www.instagram.com/thuggerthugger1/';
 	   $artist->twitter_url = 'https://twitter.com/youngthug';
 	   $artist->soundcloud_url = 'https://soundcloud.com/youngthugworld';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '3';
 	   $artist->image = 'youngthug.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Nessly';
 	   $artist->email = 'nesslybooking@gmail.com';
 	   $artist->bio = 'Atlanta native Nessly has thrived in the SoundCloud rap scene for some time, garnering cosigns from other influential artists and OVO Sound Radio in the process.';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/nessly/';
 	   $artist->twitter_url = 'https://twitter.com/nessly24k';
 	   $artist->soundcloud_url = 'https://soundcloud.com/nessly';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '10';
 	   $artist->image = 'nessly.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'NOBU';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Producer out of Austin, TX with an extensive resume and prolific work ethic combined with an extremely unique sound making future waves.';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/yung_yoshi/';
 	   $artist->twitter_url = 'https://twitter.com/nobueats';
 	   $artist->soundcloud_url = 'https://soundcloud.com/yoshi_nobu';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'NOBU.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'BOOU';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Producer out of Austin, TX';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = 'https://www.facebook.com/BoouMusic/';
 	   $artist->instagram_url = 'https://www.instagram.com/booumusic/';
 	   $artist->twitter_url = 'https://twitter.com/booumusic';
 	   $artist->soundcloud_url = 'https://soundcloud.com/booumusic';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'BOOU.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Bankreaux';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Born and raised in Atlanta, Bankreaux is prepared to take over the rap game growing a steady local fanbase currently out of Austin, TX.';
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/bankreaux/';
 	   $artist->twitter_url = '';
 	   $artist->soundcloud_url = 'https://soundcloud.com/bankreaux';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'bankreaux.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Wheezy';
 	   $artist->email = 'wheezywaves@gmail.com';
 	   $artist->bio = 'Wheezy tends toward the spacious and spare; his beats give Young Thug room, so that their songs are as much shaped by Thug\'s vocals as any drums. In a serenely stoned conversation over the phone from Atlanta, Wheezy spoke about finding chemistry with Thug, and his Atlanta mentors. He is also currently working with Future, Spooky Black, Travis Scott, and many more.';
 	   $artist->genre = 'Rap, Producer';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = '';
 	   $artist->twitter_url = 'https://twitter.com/wheezy5th/';
 	   $artist->soundcloud_url = 'https://soundcloud.com/wheezybeat';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '3';
 	   $artist->image = 'wheezy.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Gunna';
 	   $artist->email = 'lyorcohen@300ent.com';
 	   $artist->bio = 'Rapper signed with Young Thug\'s label YSL under 300 entertainment' ;
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/only1_gunna/';
 	   $artist->twitter_url = 'https://twitter.com/1gunnagunna?lang=en';
 	   $artist->soundcloud_url = '';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '3';
 	   $artist->image = 'gunna.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = '21 Savage';
 	   $artist->email = 'lyorcohen@300ent.com';
 	   $artist->bio = 'Shayaa Bin Abraham-Joseph (born October 22, 1992), known professionally as 21 Savage, is an American hip hop recording artist from Atlanta, Georgia. He is best known for his mixtapes, The Slaughter Tape and Slaughter King and his extended plays Free Guwop and Savage Mode with Metro Boomin.';
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = 'https://www.facebook.com/21Savage/';
 	   $artist->instagram_url = 'https://www.instagram.com/21savage/';
 	   $artist->twitter_url = 'https://twitter.com/21savage';
 	   $artist->soundcloud_url = 'https://soundcloud.com/21savage';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '3';
 	   $artist->image = '21savage.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Ricky Racks';
 	   $artist->email = 'rickyracksbooking@gmail.com';
 	   $artist->bio = 'Ricky Racks, whose real name is Ricky Harrell, is a 30 year old producer hailing from Greenville, North Carolina. He grew up in a musical family, learning a lot from his father who played guitar and his mother who used to sing in a quartet group. Growing up, Ricky learned how to play the drums at the age of six. Ricky Racks co-produced one of Young Thug’s biggest hits, “Best Friend,” and has consistently worked with him on other tracks during his career as a producer. In 2017, Ricky Racks has produced on the tracks “What the Price” by Migos and “Peek a Boo” by Lil Yachty.';
 	   $artist->genre = 'Rap, Producer';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/rickyracksicu/';
 	   $artist->twitter_url = 'https://twitter.com/rickyracksicu';
 	   $artist->soundcloud_url = 'https://soundcloud.com/rickyracks-1';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '4';
 	   $artist->image = 'rickyracks.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Rome Fortune';
 	   $artist->email = 'smithtalent.mgmt@gmail.com';
 	   $artist->bio = 'Jerome Fortune (born October 13, 1988), better known by his stage name Rome Fortune, is an American hip hop recording artist from Atlanta, Georgia who rose to prominence after the release of his Beautiful Pimp mixtape in 2013. Influenced by a diverse range of musical traditions, Fortune has released 6 EPs and has collaborated with a number of artists from the Atlanta hip hop scene, including OG Maco, Dun Deal, and ILoveMakonnen. He is currently working on his much anticipated Beautiful Pimp 3 EP.';
 	   $artist->genre = 'Rap, Experimental';
 	   $artist->facebook_url = 'https://www.facebook.com/RomeFortune/';
 	   $artist->instagram_url = 'https://www.instagram.com/romefortune/';
 	   $artist->twitter_url = 'https://twitter.com/romefortune';
 	   $artist->soundcloud_url = 'https://soundcloud.com/romefortune';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '2';
 	   $artist->image = 'romefortune.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Thouxanbandfauni';
 	   $artist->email = 'THOUXANBANMGMT@GMAIL.COM';
 	   $artist->bio = 'Rapper Thouxanbanfauni, from Chattanooga, TN, but raised In Atlanta, is associated with Playboi Carti & UnoTheActivist.';
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/thouxbanfauni/';
 	   $artist->twitter_url = 'https://twitter.com/Thouxanbanfauni';
 	   $artist->soundcloud_url = 'https://soundcloud.com/thouxanban';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '6';
 	   $artist->image = 'thouxanbandfauni.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'UnoTheActivist';
 	   $artist->email = '2900ent@gmail.com';
 	   $artist->bio = 'UnoTheActivist is an up-and-coming rapper from Zone 3, Atlanta. He released his debut mixtape, No More Thotties, in late 2015, which was followed up by Gift of Gab, a mixtape which was released in early 2016. Some of Uno’s most common collaborators are: Maxo Kream, Playboi Carti, which is also his cousin, & ThouxanbandFauni.';
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/unotheactivist/';
 	   $artist->twitter_url = 'https://twitter.com/unotheactivist';
 	   $artist->soundcloud_url = 'https://soundcloud.com/678uno';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '7';
 	   $artist->image = 'unotheactivist.jpg';
 	   $artist->save();

 	   $artist = new Post();
 	   $artist->artist_name = 'Lil Duke';
 	   $artist->email = 'lyorcohen@300ent.com';
 	   $artist->bio = 'Duke is a member of YSL – Young Slime Life/Young Stoner Life with Young Thug. Duke’s twitter name is YSLDuke, He has a few projects including Lil Duke, Uber, and new mixtape Blue Devil — Uber is his third mixtape, his first two mixtapes were the self-titled Lil Duke and Hit Hard Move Silent.';
 	   $artist->genre = 'Rap';
 	   $artist->facebook_url = '';
 	   $artist->instagram_url = 'https://www.instagram.com/LilDuke60/';
 	   $artist->twitter_url = 'https://twitter.com/YslDuke';
 	   $artist->soundcloud_url = 'https://soundcloud.com/yslduke';
 	   $artist->bandcamp_url = '';
 	   $artist->created_by = '3';
 	   $artist->image = 'yslduke.jpg';
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
