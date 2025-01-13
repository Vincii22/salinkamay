<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LettersTableSeeder::class);
        $this->call(PhraseTableSeeder::class);
        $this->call(class: NumbersTableSeeder::class);
        $this->call(class: TimeExpressionsTableSeeder::class);
    }
}
