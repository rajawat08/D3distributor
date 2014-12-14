<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            [
               
                'email' => 'rajawat.it@gmail.com',
                'password' => 'rajawat#123'
            ],
        ];

        foreach ($users as $user) {
            $u = User::where('email', '=', $user['email'])->first();
            if (is_null($u)) {
                $user = [
                    [                       
                        'email' => $user['email'],
                        'password' => Hash::make($user['password'])
                    ]
                ];
                DB::table('users')->insert($user);
            }
            unset($user);
        }
	}

}