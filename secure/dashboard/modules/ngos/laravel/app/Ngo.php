<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
  protected $table = 'ngo';

  protected $fillable = ['ngo_name', 'ngo_email', 'ngo_phone', 'ngo_image', 
  	'ngo_cover', 'ngo_description'];

	public function causes()
	{
		return $this->hasMany(Cause::class, 'user_id', 'user_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function messages()
	{
		return $this->hasMany(Message::class, 'user_id', 'user_id');
	}
}
