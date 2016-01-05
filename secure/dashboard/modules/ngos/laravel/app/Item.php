<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = 'item';

  protected $fillable = ['item_name', 'item_description', 'item_required',
  	'item_received', 'item_promised'];

	protected $primaryKey = 'item_id';

	public $timestamps = false;


	public function cause()
	{
		return $this->belongsTo(Cause::class, 'cause_id', 'cause_id');
	}
}
