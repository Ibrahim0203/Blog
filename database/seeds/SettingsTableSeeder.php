<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            
          'site_name' => "Laravel's Blog",
          'contact_number' => "01726598575",
          'contact_email' => "mohammadibrahim.cse7@gmail.com",
          'address'=>"Bangladesh,Dhaka"

        ]);
    }
}
