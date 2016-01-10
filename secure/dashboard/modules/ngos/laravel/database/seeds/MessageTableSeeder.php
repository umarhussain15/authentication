<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ngo;
use App\Message;

class MessageTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("SET foreign_key_checks = 0");
    Message::truncate();
    DB::statement("SET foreign_key_checks = 1");

    $date = (new DateTime())->format('Y-m-d H:i:s');
    $ngo = Ngo::where('ngo_email', 'minus.zee@gmail.com')->get()->first();

    Message::create([
    	'user_id' => $ngo->user_id,
    	'sender' => 'fucker',
    	'message_subject' => 'Good Work.',
    	'message_body' => 'Loving you work. To Minus Z. ORG',
    	'sent_date' => $date
  	]);

  	// $ngo = Ngo::where('ngo_email', 'doublea@gmail.com')->get()->first();

  	// Message::create([
   //  	'user_id' => $ngo->user_id,
   //  	'sender' => 'chibi_loli',
   //  	'message_subject' => 'Mooo.',
   //  	'message_body' => 'Don\'t get the wrong idea. DoubleA.',
   //  	'sent_date' => $date
  	// ]);
  }
}
