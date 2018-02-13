<?php

use Illuminate\Database\Seeder;
use App\Member;
use Faker\Factory;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Factory::create('es_AR');
    	for ($i=0; $i < 10; $i++) { 
    		if(rand(0,1) < 0.5){
	    		Member::create([
	    			'first_name' => $faker->firstName('male'),
	    			'last_name' => $faker->lastName('male'),
	    			'age' => $faker->numberBetween(18,40),
	    			'sex' => 1,
	    		]);    			
    		}else{
	    		Member::create([
	    			'first_name' => $faker->firstName('female'),
	    			'last_name' => $faker->lastName('female'),
	    			'age' => $faker->numberBetween(18,40),
	    			'sex' => 2,
	    		]);
    		}
    	}
    }
}
