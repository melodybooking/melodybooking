<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name')->unique();
            $table->string('email');
            $table->string('password', 60);
			$table->string('bio', 400);
			$table->string('genre', 60);
			$table->string('facebook_url', 100)->nullable();
			$table->string('instagram_url', 100)->nullable();
			$table->string('twitter_url', 100)->nullable();
			$table->string('soundcloud_url', 100)->nullable();
			$table->string('bandcamp_url', 100)->nullable();
			$table->integer('created_by')->unsigned(); //column definition
			$table->foreign('created_by')->references('id')->on('users'); //foreign key
			$table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artists');
    }
}
