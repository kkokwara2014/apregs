<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::create([
            'name' => 'Dr.',
            'slug' => Str::slug('Dr.'),
        ]);
        Title::create([
            'name' => 'Dr. (Mrs.)',
            'slug' => Str::slug('Dr. (Mrs.)'),
        ]);
        Title::create([
            'name' => 'Engr. Dr.',
            'slug' => Str::slug('Engr. Dr.'),
        ]);
        Title::create([
            'name' => 'Mr.',
            'slug' => Str::slug('Mr.'),
        ]);
        Title::create([
            'name' => 'Mrs.',
            'slug' => Str::slug('Mrs.'),
        ]);
        Title::create([
            'name' => 'Miss.',
            'slug' => Str::slug('Miss.'),
        ]);
    }
}
