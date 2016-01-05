<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Ngo;

class NgoTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("SET foreign_key_checks = 0");
    Ngo::truncate();
    DB::statement("SET foreign_key_checks = 1");

    $user = User::where('user_name', '=', 'ameturasu')->get()->first();
    
    Ngo::create([
      'user_id' => $user->user_id,
      'ngo_name' => 'Double A. ORG',
      'ngo_email' => 'doublea@gmail.com',
      'ngo_phone' => '+923237455131',
      'ngo_image' => 'ngo image here.',
      'ngo_cover' => 'ngo cover image here.',
      'ngo_description' => 'this non-profit origanization is actually dummy.'
    ]);

    $user = User::where('user_name', '=', 'glorizen')->get()->first();

    Ngo::create([
      'user_id' => $user->user_id,
      'ngo_name' => 'Minus Z. ORG',
      'ngo_email' => 'minus.zee@gmail.com',
      'ngo_phone' => '+923234545554',
      'ngo_image' => 'zee image here.',
      'ngo_cover' => 'ngo zee cover image here.',
      'ngo_description' => 'this non-profit origanization is actually zee.'
    ]);
  }
}
