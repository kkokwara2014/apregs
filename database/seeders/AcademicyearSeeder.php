<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcademicyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Academicyear::create([
            'name' => '2020/2021 Academic Session',
            'slug' => Str::slug('2020/2021 Academic Session'),
        ]);
    }
}
