<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $now = date('Y-m-d');
    	for ($i=0; $i<40; $i++) {
            DB::table('commentos')->insert([
                'date'          => date('Y-m-d', strtotime('-'.rand(1,90).' days', strtotime($now))),
                'description'   => 'Potete dare il vostro parere',
                'name'        => 'Entrate il vostro nome',
                'updated_at'    => date('Y-m-d h:i:s'),
                'created_at'    => date('Y-m-d h:i:s')		        		        
            ]);			
        }
        Model::reguard();
    }
}
