<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    $this->call(UserTableSeeder::class);
    $this->call(NgoTableSeeder::class);
    $this->call(CauseTableSeeder::class);
    $this->call(ItemTableSeeder::class);
    $this->call(MessageTableSeeder::class);

    Model::reguard();
  }
}
