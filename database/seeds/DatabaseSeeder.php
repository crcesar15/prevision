<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('profile');
        Storage::makeDirectory('profile');
        factory(\App\Role::class, 1)->create([
            'role'=> 'Administrator',
            'description'=> 'This role have all access and permissions'
        ]);

        factory(\App\User::class, 1)->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@email.com' 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
