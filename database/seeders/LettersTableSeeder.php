<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Letter;
class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $letters = range('A', 'Z');
        foreach ($letters as $index => $letter) {
            Letter::create([
                'letter' => $letter,
                'image_path' => "signs/alphabets/" . ($index + 1) . ".png",
            ]);
        }
    }
}
