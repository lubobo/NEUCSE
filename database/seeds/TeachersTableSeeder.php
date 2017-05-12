<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher=new \App\Teacher();
        $teacher->name='沙瑞金';
        $teacher->number='19961111';
        $teacher->sex='男';
        $teacher->college='计算机科学与工程学院';
        $teacher->major='计算机软件与理论';
        $teacher->email='19961111@neu.edu.com';
        $teacher->password=md5('123456789');
        $teacher->birthday=date('Y-m-d',strtotime('1980-3-27'));
        $teacher->save();
    }
}
