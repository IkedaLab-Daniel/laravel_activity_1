<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // > Exercise 6
        Student::create([
            'name' => 'Mark Daniel',
            'email' => 'markdanie@mcc.edu.ph',
            'age' => 20
        ]);

        Student::create([
            'name' => 'Daniel',
            'email' => 'daniel@mcc.edu.ph',
            'age' => 19
        ]);

        Student::create([
            'name' => 'Mark',
            'email' => 'markd@mcc.edu.ph',
            'age' => 18
        ]);

        Student::create([
            'name' => 'MD',
            'email' => 'md@mcc.edu.ph',
            'age' => 20
        ]);

        Student::create([
            'name' => 'Ice Ice',
            'email' => 'deviceice@mcc.edu.ph',
            'age' => 20
        ]);
    }
}
