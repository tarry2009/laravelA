<?php
#use DB;
use Illuminate\Database\Seeder;
#use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		// fake seeding
		/*
		$faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'username' => $faker->username, 
                'biog' => $faker->paragraph, 
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
        */
        /* original seeding*/
        // $this->call(UsersTableSeeder::class);
         Eloquent::unguard();

        //call uses table seeder class
		$this->call('UsersTableSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Users table seeded :)");
    }
}

class UsersTableSeeder extends Seeder {
 
       public function run()
       {
         //delete users table records
         DB::table('users')->delete();
         //insert some dummy records
         DB::table('users')->insert(array(
             array('username'=>'john','name'=>'john','email'=>'john@clivern.com','password'=> bcrypt('secret'),'biog'=>'PHP Ninga'),
             array('username'=>'mark','name'=>'mark','email'=>'mark@clivern.com','password'=> bcrypt('secret'),'biog'=>'JS Ninga'),
             array('username'=>'Karl','name'=>'Karl','email'=>'karl@clivern.com','password'=> bcrypt('secret'),'biog'=>'Jquery Ninga'),
             array('username'=>'marl','name'=>'marl','email'=>'marl@clivern.com','password'=> bcrypt('secret'),'biog'=>'Not Ninga'),
             array('username'=>'mary','name'=>'mary','email'=>'mary@clivern.com','password'=> bcrypt('secret'),'biog'=>'HTML Ninga'),
             array('username'=>'sels','name'=>'sels','email'=>'sels@clivern.com','password'=> bcrypt('secret'),'biog'=>'CSS Ninga'),
             array('username'=>'taylor','name'=>'taylor','email'=>'taylor@clivern.com','password'=> bcrypt('secret'),'biog'=>'Laravel Ninga'),

          ));
       }
 
}
