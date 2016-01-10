<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ngo;
use App\Cause;

class CauseTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("SET foreign_key_checks = 0");
    Cause::truncate();
    DB::statement("SET foreign_key_checks = 1");

    // $ngo = Ngo::where('ngo_name', 'Double A. ORG')->get()->first();

    // Cause::create([
    //   'user_id' => $ngo->user_id,
    //   'cause_title' => 'EarthQuake PK',
    //   'cause_venue' => 'ISLAMABAD',
    //   'cause_cover' => 'Optimal cover for cause.',
    //   'cause_description' => 'Raising fund for PK earthquake.'
    // ]);

    // Cause::create([
    //   'user_id' => $ngo->user_id,
    //   'cause_title' => 'Flood Donation PK',
    //   'cause_venue' => 'LAHORE',
    //   'cause_cover' => 'Optimal cover for flood water.',
    //   'cause_description' => 'Raising fund for Flood prevention.'
    // ]);

    $ngo = Ngo::where('ngo_name', 'Minus Z. ORG')->get()->first();

    Cause::create([
      'user_id' => $ngo->user_id,
      'cause_title' => 'Child Support',
      'cause_venue' => 'United Kingdom',
      'cause_cover' => 'cover image for child',
      'cause_description' => 'Raising fund for supporting child.'
    ]);

    Cause::create([
      'user_id' => $ngo->user_id,
      'cause_title' => 'Liberation of minor sex',
      'cause_venue' => 'Burma',
      'cause_cover' => 'Burma cover image',
      'cause_description' => 'Transport service for minorities.'
    ]);
  }
}
