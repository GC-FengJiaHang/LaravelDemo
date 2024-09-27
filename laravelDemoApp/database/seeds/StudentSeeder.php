<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // 使用工厂生成 10 条用户数据
        factory(Student::class, 10)->create();
    }
}
