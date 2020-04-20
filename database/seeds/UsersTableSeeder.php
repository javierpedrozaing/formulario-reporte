<?php

use Illuminate\Database\Seeder;
use App\User as User;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		User::create(array(
			'name'     => 'Administrador',			
			'email'    => 'javierpedrozaing@gmail.com',
			'password' => Hash::make('12345678'),
		));
    }
}
