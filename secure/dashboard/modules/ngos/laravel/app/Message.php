<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $table = 'message';

  protected $fillable = ['message_subject', 'message_body', 'sender'];

  public $timestamps = false;

  public function ngo()
  {
  	return $this->belongsTo(Ngo::class, 'user_id', 'user_id');
  }
}
