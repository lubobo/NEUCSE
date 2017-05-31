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
        $user->name='root';
        $user->email='20143809@neu.edu.stu.com';
        $user->password=md5('root');
        $user->save();
    }
}
