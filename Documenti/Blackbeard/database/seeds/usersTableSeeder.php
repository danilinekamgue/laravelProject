<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i <10; $i++){
        	DB::table('users')->insert(
        		[
        			'name'=>'Nome'.$i,
        			'email'=>'email'.$i.'@gmail.fr',
        			'password'=>bcrypt('password'.$i),
        			'admin'=>rand(0,1)
        		]
        	);
        }
    }
}
