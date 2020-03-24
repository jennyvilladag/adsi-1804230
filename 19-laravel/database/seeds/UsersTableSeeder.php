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
        DB::table('users')->insert([
            'fullname' => 'Jeremias Springfield',
            'email' => 'jeremias@gmail.com',
            'phone' => 3239090345,
            'birthdate' => '1950-11-12',
            'gender' => 'Male',
            'address' => 'Street Siempre Viva',
            'role' => 'Admin',
            'password' => Hash::make('admin'),
        ]);

        $user = new App\User;
        $user->fullname = 'Jenny Tatiana Villada';
        $user->email = 'jenny@misena.edu.co';
        $user->phone = 3103972380;
        $user->birthdate = '1981-10-18';
        $user->gender = 'Male';
        $user->address = 'Cll 128-129';
        $user->role = 'Admin';
        $user->password = bcrypt('admin');
        $user->save();

        factory(App\User::class, 100)->create();
    }
}
