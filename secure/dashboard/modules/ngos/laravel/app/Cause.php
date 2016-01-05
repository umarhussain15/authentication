<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
	protected $table = 'cause';

	protected $fillabel = ['cause_title', 'cause_venue', 'cause_cover',
		'cause_description'];

	protected $primaryKey = 'cause_id';

	public $timestamps = false;

	public function items()
	{
		return $this->hasMany(Item::class, 'cause_id', 'cause_id');
	}

	public function ngo()
	{
		return $this->belongsTo(Ngo::class, 'user_id', 'user_id');
	}
}
