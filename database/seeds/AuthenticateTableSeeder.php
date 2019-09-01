<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class AuthenticateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
        	'first_name'=>'Ali',
            'last_name'=>'Newaz',
        	'email'=>'admin@localhost.local',
        	'phone'=>'01850987654',
        	'address'=>'West Rampura',
            'birth'=> Carbon::parse('01/08/1996'),
            'password' => Hash::make('admin'),
            'role'=>'admin',
        	
        ]);
    }
}
