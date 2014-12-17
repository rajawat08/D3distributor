<?php namespace Pingpong\Admin\Seeders;

use Pingpong\Admin\Entities\User;

class UsersTableSeeder extends \Seeder {

    public function run()
    {
        $user = User::create([
            'username' => 'admin',
            'email' => 'rajawat.it@gmail.com',
            'password' => 'admin12345',
        ]);

        if ( ! $user->hasRole('admin')->first()) $user->roles()->attach(1);
    }

}