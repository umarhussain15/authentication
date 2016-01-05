<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("SET foreign_key_checks = 0");
    User::truncate();
    DB::statement("SET foreign_key_checks = 1");
    
    User::create([
      'user_name' => 'glorizen',
      'user_email' => 'abc@example.com',
      'password' => 'power321'
    ]);

    User::create([
      'user_name' => 'ameturasu',
      'user_email' => 'xyz@example.com',
      'password' => 'user321'
    ]);

    User::create([
      'user_name' => 'bilbo',
      'user_email' => 'lmn@example.com',
      'password' => 'user980',
      'is_user_admin' => true
    ]);
  }
}
