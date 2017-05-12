<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students=new \App\Students();
        $students->number='20143809';
        $students->name='李达康';
        $students->sex='男';
        $students->college='计算机科学与工程';
        $students->major='计算机科学与技术';
        $students->birthday=date('Y-m-d',strtotime('1996-3-27'));
        $students->email='20143809@neu.edu.stu.com';
        $students->password=md5('13653917lgbdqq');
        $students->save();
    }
}
