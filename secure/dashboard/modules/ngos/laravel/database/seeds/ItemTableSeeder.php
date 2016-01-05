<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Cause;
use App\Item;

class ItemTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	DB::statement("SET foreign_key_checks = 0");
    Item::truncate();
    DB::statement("SET foreign_key_checks = 1");

    $cause = Cause::where('cause_title', 
  		'Liberation of minor sex')->get()->first();

    Item::create([
    	'cause_id' => $cause->cause_id,
    	'item_name' => 'blanket',
    	'item_description' => 'for minor sex',
    	'item_required' => 20,
    	'item_received' => 7,
    	'item_worth' => 11
  	]);

  	Item::create([
  		'cause_id' => $cause->cause_id,
    	'item_name' => 'bedsheets',
    	'item_description' => 'for minor sex',
    	'item_required' => 45,
    	'item_received' => 23,
    	'item_worth' => 9
  	]);

    $cause = Cause::where('cause_title', 
    	'Child Support')->get()->first();

    Item::create([
    	'cause_id' => $cause->cause_id,
    	'item_name' => 'books',
    	'item_description' => 'for child support',
    	'item_required' => 200,
    	'item_received' => 159,
    	'item_worth' => 14
  	]);

  	Item::create([
  		'cause_id' => $cause->cause_id,
    	'item_name' => 'desks',
    	'item_description' => 'for child support',
    	'item_required' => 100,
    	'item_received' => 67,
    	'item_worth' => 15
  	]);

    $cause = Cause::where('cause_title', 
    	'Flood Donation PK')->get()->first();

    Item::create([
    	'cause_id' => $cause->cause_id,
    	'item_name' => 'blanket',
    	'item_description' => 'for flood donation',
    	'item_required' => 500,
    	'item_received' => 322,
    	'item_worth' => 12
  	]);

  	Item::create([
  		'cause_id' => $cause->cause_id,
    	'item_name' => 'clothes',
    	'item_description' => 'for flood donation',
    	'item_required' => 900,
    	'item_received' => 545,
    	'item_worth' => 15
  	]);

    $cause = Cause::where('cause_title', 
    	'Earthquake PK')->get()->first();

    Item::create([
    	'cause_id' => $cause->cause_id,
    	'item_name' => 'cash',
    	'item_description' => 'for earthquake',
    	'item_required' => 500000,
    	'item_received' => 123410,
    	'item_worth' => 1
  	]);

  	Item::create([
  		'cause_id' => $cause->cause_id,
    	'item_name' => 'clothes',
    	'item_description' => 'for earthquake',
    	'item_required' => 100,
    	'item_received' => 67,
    	'item_worth' => 15
  	]);
  }
}
