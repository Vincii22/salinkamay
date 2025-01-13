<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Number;

class NumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Sample numbers and their video filenames
       $numbers = [
        ['number' => '1', 'image_path' => 'signs/numbers/isa (one).png'],
        ['number' => 'one', 'image_path' => 'signs/numbers/isa (one).png'],
        ['number' => 'isa', 'image_path' => 'signs/numbers/isa (one).png'],
        ['number' => 'una', 'image_path' => 'signs/numbers/una (1st).mp4'],
        ['number' => '1st', 'image_path' => 'signs/numbers/una (1st).mp4'],
        ['number' => 'first', 'image_path' => 'signs/numbers/una (1st).mp4'],
        ['number' => 'dalawa', 'image_path' => 'signs/numbers/dalawa (two).png'],
        ['number' => '2', 'image_path' => 'signs/numbers/dalawa (two).png'],
        ['number' => 'two', 'image_path' => 'signs/numbers/dalawa (two).png'],
        ['number' => 'pangalawa', 'image_path' => 'signs/numbers/pangalawa (2nd).mp4'],
        ['number' => 'second', 'image_path' => 'signs/numbers/pangalawa (2nd).mp4'],
        ['number' => '2nd', 'image_path' => 'signs/numbers/pangalawa (2nd).mp4'],
        ['number' => 'three', 'image_path' => 'signs/numbers/tatlo (three).png'],
        ['number' => '3', 'image_path' => 'signs/numbers/tatlo (three).png'],
        ['number' => 'tatlo', 'image_path' => 'signs/numbers/tatlo (three).png'],
        ['number' => 'pangatlo', 'image_path' => 'signs/numbers/pangatlo (3rd).mp4'],
        ['number' => '3rd', 'image_path' => 'signs/numbers/pangatlo (3rd).mp4'],
        ['number' => 'third', 'image_path' => 'signs/numbers/pangatlo (3rd).mp4'],
        ['number' => '4', 'image_path' => 'signs/numbers/apat (four).png'],
        ['number' => 'apat', 'image_path' => 'signs/numbers/apat (four).png'],
        ['number' => 'four', 'image_path' => 'signs/numbers/apat (four).png'],
        ['number' => 'five', 'image_path' => 'signs/numbers/lima (five).png'],
        ['number' => '5', 'image_path' => 'signs/numbers/lima (five).png'],
        ['number' => 'lima', 'image_path' => 'signs/numbers/lima (five).png'],
        ['number' => '6', 'image_path' => 'signs/numbers/anim (six).png'],
        ['number' => 'anim', 'image_path' => 'signs/numbers/anim (six).png'],
        ['number' => 'six', 'image_path' => 'signs/numbers/anim (six).png'],
        ['number' => '7', 'image_path' => 'signs/numbers/pito (seven).png'],
        ['number' => 'pito', 'image_path' => 'signs/numbers/pito (seven).png'],
        ['number' => 'seven', 'image_path' => 'signs/numbers/pito (seven).png'],
        ['number' => 'eight', 'image_path' => 'signs/numbers/walo (eight).png'],
        ['number' => 'walo', 'image_path' => 'signs/numbers/walo (eight).png'],
        ['number' => '8', 'image_path' => 'signs/numbers/walo (eight).png'],
        ['number' => '9', 'image_path' => 'signs/numbers/siyam (nine).png'],
        ['number' => 'siyam', 'image_path' => 'signs/numbers/siyam (nine).png'],
        ['number' => 'syam', 'image_path' => 'signs/numbers/siyam (nine).png'],
        ['number' => 'nine', 'image_path' => 'signs/numbers/siyam (nine).png'],
        ['number' => 'sampu', 'image_path' => 'signs/numbers/SAMPU (10).mp4'],
        ['number' => '10', 'image_path' => 'signs/numbers/SAMPU (10).mp4'],
        ['number' => 'ten', 'image_path' => 'signs/numbers/SAMPU (10).mp4'],
        ['number' => 'sampo', 'image_path' => 'signs/numbers/SAMPU (10).mp4'],
        ['number' => 'isang daan', 'image_path' => 'signs/numbers/isang daan (one hundred) .mp4'],
        ['number' => '100', 'image_path' => 'signs/numbers/isang daan (one hundred) .mp4'],
        ['number' => 'one hundred', 'image_path' => 'signs/numbers/isang daan (one hundred) .mp4'],
        // Add more numbers as needed
    ];

    // Insert numbers into the database
    foreach ($numbers as $number) {
        Number::create([
            'number' => $number['number'],
            'image_path' => $number['image_path'],
        ]);
    }
    }
}
