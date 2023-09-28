<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Student::query()->create([
             'name' => 'Olimboy',
             'age' => 23,
             'number' => 998942341000,
         ]);
    }
}
