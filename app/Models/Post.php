<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    protected $table = 'posts';

	public static $rules = [
		'artist_name' => 'required|max:100',
		'email'   => 'required',
		'bio'   => 'required',
		'genre' => 'required',
		'image' => 'required',
	];

	public function user() {
		return $this->belongsTo('App\User', 'created_by');
	}
}
