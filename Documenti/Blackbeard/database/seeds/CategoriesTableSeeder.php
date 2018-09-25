<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$categories = ['Altro', 'Supermercato', 'Casa', 'Svago'];

    	foreach ($categories as $category) {
			DB::table('categories')->insert([
		        'name' => $category,
				'updated_at' => date('Y-m-d h:i:s'),
				'created_at' => date('Y-m-d h:i:s')		        		        
			]);			
        }

        Model::reguard();
    }
}
