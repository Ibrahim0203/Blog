<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
            'name'=>'Mohammad Ibrahim',
            'email'=>'mohammad.ibrahim@hello.com',
            'password'=>bcrypt('123456789'),
            'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/images.jpeg',
            'about'=>'paragraph',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);

    }
}
