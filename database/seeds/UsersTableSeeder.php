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
        $user=new \App\User();
        $user->name='李达康';
        $user->email='20143809@neu.edu.stu.com';
        $user->password='13653917lgbdqq';
        $user->save();
    }
}
