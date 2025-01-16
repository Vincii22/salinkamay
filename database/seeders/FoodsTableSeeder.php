<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Sample numbers and their video filenames
       $foods = [
        ['food' => 'agahan', 'video_path' => 'signs/foods/agahan.mp4'],
        ['food' => 'breakfast', 'video_path' => 'signs/foods/agahan.mp4'],
        ['food' => 'apple juice', 'video_path' => 'signs/foods/apple juice.mp4'],
        ['food' => 'katas ng mansanas', 'video_path' => 'signs/foods/apple juice.mp4'],
        ['food' => 'boiled egg', 'video_path' => 'signs/foods/boiled egg.mp4'],
        ['food' => 'boiled egg', 'video_path' => 'signs/foods/boiled egg 2.mp4'],
        ['food' => 'nilagang itlog', 'video_path' => 'signs/foods/boiled egg.mp4'],
        ['food' => 'pinakuluang itlog', 'video_path' => 'signs/foods/boiled egg 2.mp4'],
        ['food' => 'calamansi juice', 'video_path' => 'signs/foods/calamansi juice.mp4'],
        ['food' => 'lemon juice', 'video_path' => 'signs/foods/calamansi juice.mp4'],
        ['food' => 'katas ng kalamansi', 'video_path' => 'signs/foods/calamansi juice.mp4'],
        ['food' => 'pritong itlog', 'video_path' => 'signs/foods/fried egg.mp4'],
        ['food' => 'fried egg', 'video_path' => 'signs/foods/fried egg.mp4'],
        ['food' => 'kumain', 'video_path' => 'signs/foods/boiled egg.mp4'],
        ['food' => 'eat', 'video_path' => 'signs/foods/boiled egg.mp4'],
        ['food' => 'gusto mo kumain?', 'video_path' => 'signs/foods/gusto mo kumain.mp4'],
        ['food' => 'do you want to eat?', 'video_path' => 'signs/foods/gusto mo kumain.mp4'],
        ['food' => 'gusto mo kumain', 'video_path' => 'signs/foods/gusto mo kumain.mp4'],
        ['food' => 'do you want to eat', 'video_path' => 'signs/foods/gusto mo kumain.mp4'],
        ['food' => 'gutom', 'video_path' => 'signs/foods/gutom.mp4'],
        ['food' => 'gutom', 'video_path' => 'signs/foods/gutom 2.mp4'],
        ['food' => 'hungry', 'video_path' => 'signs/foods/gutom.mp4'],
        ['food' => 'hungry', 'video_path' => 'signs/foods/gutom 2.mp4'],
        ['food' => 'gutom ako', 'video_path' => 'signs/foods/gutom ako.mp4'],
        ['food' => 'gutom ako', 'video_path' => 'signs/foods/gutom ako 2.mp4'],
        ['food' => 'im hungry', 'video_path' => 'signs/foods/gutom ako.mp4'],
        ['food' => 'im hungry', 'video_path' => 'signs/foods/gutom ako 2.mp4'],
        ['food' => 'ham', 'video_path' => 'signs/foods/ham.mp4'],
        ['food' => 'ham', 'video_path' => 'signs/foods/ham 2.mp4'],
        ['food' => 'herbal tea', 'video_path' => 'signs/foods/herbal tea.mp4'],
        ['food' => 'tea', 'video_path' => 'signs/foods/herbal tea.mp4'],
        ['food' => 'honey', 'video_path' => 'signs/foods/honey.mp4'],
        ['food' => 'honey', 'video_path' => 'signs/foods/honey 2.mp4'],
        ['food' => 'pulot pukyutan', 'video_path' => 'signs/foods/honey.mp4'],
        ['food' => 'pulot pukyutan', 'video_path' => 'signs/foods/honey 2.mp4'],
        ['food' => 'hotdog', 'video_path' => 'signs/foods/hotdog.mp4'],
        ['food' => 'iced tea', 'video_path' => 'signs/foods/iced tea.mp4'],
        ['food' => 'ice tea', 'video_path' => 'signs/foods/iced tea 2.mp4'],
        ['food' => 'iced tea', 'video_path' => 'signs/foods/iced tea.mp4'],
        ['food' => 'ice tea', 'video_path' => 'signs/foods/iced tea 2.mp4'],
        ['food' => 'inumin', 'video_path' => 'signs/foods/inumin.mp4'],
        ['food' => 'drink', 'video_path' => 'signs/foods/inumin.mp4'],
        ['food' => 'itlog', 'video_path' => 'signs/foods/itlog.mp4'],
        ['food' => 'egg', 'video_path' => 'signs/foods/itlog.mp4'],
        ['food' => 'juice', 'video_path' => 'signs/foods/juice.mp4'],
        ['food' => 'dyus', 'video_path' => 'signs/foods/juice.mp4'],
        ['food' => 'katas', 'video_path' => 'signs/foods/juice.mp4'],
        ['food' => 'kape', 'video_path' => 'signs/foods/kape.mp4'],
        ['food' => 'coffee', 'video_path' => 'signs/foods/kape.mp4'],
        ['food' => 'kumain ka na ba ng agahan?', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'kumain ka na ba ng agahan', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'have you eaten breakfast?', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'have you eaten breakfast', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'did you breakfast?', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'did you breakfast', 'video_path' => 'signs/foods/kumain ka na ba ng agahan.mp4'],
        ['food' => 'kumain', 'video_path' => 'signs/foods/kumain.mp4'],
        ['food' => 'eat', 'video_path' => 'signs/foods/kumain.mp4'],
        ['food' => 'lemon-tea', 'video_path' => 'signs/foods/lemon tea.mp4'],
        ['food' => 'lemon tea', 'video_path' => 'signs/foods/lemon tea.mp4'],
        ['food' => 'mainit na tsokolate', 'video_path' => 'signs/foods/mainit na tsokolate.mp4'],
        ['food' => 'hot chocolate', 'video_path' => 'signs/foods/mainit na tsokolate.mp4'],
        ['food' => 'hot choco', 'video_path' => 'signs/foods/mainit na tsokolate.mp4'],
        ['food' => 'mayonnaise', 'video_path' => 'signs/foods/mayonnaise.mp4'],
        ['food' => 'mayo', 'video_path' => 'signs/foods/mayonnaise.mp4'],
        ['food' => 'mayonesa', 'video_path' => 'signs/foods/mayonnaise.mp4'],
        ['food' => 'milkshake', 'video_path' => 'signs/foods/milkshake.mp4'],
        ['food' => 'milkshake', 'video_path' => 'signs/foods/milkshake 2.mp4'],
        ['food' => 'kaktel na gatas', 'video_path' => 'signs/foods/milkshake.mp4'],
        ['food' => 'kaktel na gatas', 'video_path' => 'signs/foods/milkshake 2.mp4'],
        ['food' => 'milktea', 'video_path' => 'signs/foods/milktea.mp4'],
        ['food' => 'tsaa ng gatas', 'video_path' => 'signs/foods/milktea.mp4'],
        ['food' => 'monay', 'video_path' => 'signs/foods/monay o pandesal.mp4'],
        ['food' => 'pandesal', 'video_path' => 'signs/foods/monay o pandesal.mp4'],
        ['food' => 'bread', 'video_path' => 'signs/foods/monay o pandesal.mp4'],
        ['food' => 'oo', 'video_path' => 'signs/foods/oo opo.mp4'],
        ['food' => 'opo', 'video_path' => 'signs/foods/oo opo.mp4'],
        ['food' => 'yes', 'video_path' => 'signs/foods/oo opo.mp4'],
        ['food' => 'orange juice', 'video_path' => 'signs/foods/orange juice.mp4'],
        ['food' => 'katas ng kahel', 'video_path' => 'signs/foods/orange juice.mp4'],
        ['food' => 'pagkain', 'video_path' => 'signs/foods/pagkain.mp4'],
        ['food' => 'food', 'video_path' => 'signs/foods/pagkain.mp4'],
        ['food' => 'boiled', 'video_path' => 'signs/foods/pinakuluan.mp4'],
        ['food' => 'pinakuluan', 'video_path' => 'signs/foods/pinakuluan.mp4'],
        ['food' => 'piniritong itlog', 'video_path' => 'signs/foods/scrambled egg.mp4'],
        ['food' => 'scrambled egg', 'video_path' => 'signs/foods/scrambled egg.mp4'],
        ['food' => 'soda', 'video_path' => 'signs/foods/soda.mp4'],
        ['food' => 'soft drinks', 'video_path' => 'signs/foods/soda.mp4'],
        ['food' => 'softdrinks', 'video_path' => 'signs/foods/soda.mp4'],
        ['food' => 'bread', 'video_path' => 'signs/foods/tinapay.mp4'],
        ['food' => 'tinapay', 'video_path' => 'signs/foods/tinapay.mp4'],
        ['food' => 'tocino', 'video_path' => 'signs/foods/tocino.mp4'],
        ['food' => 'tsaa', 'video_path' => 'signs/foods/tsaa.mp4'],
        ['food' => 'tea', 'video_path' => 'signs/foods/tsaa.mp4'],
        ['food' => 'chaa', 'video_path' => 'signs/foods/tsaa.mp4'],
        ['food' => 'uminom ng gatas', 'video_path' => 'signs/foods/uminom ng gatas.mp4'],
        ['food' => 'drink milk', 'video_path' => 'signs/foods/uminom ng gatas.mp4'],
        ['food' => 'uminom ng tubig', 'video_path' => 'signs/foods/uminom ng tubig.mp4'],
        ['food' => 'drink water', 'video_path' => 'signs/foods/uminom ng tubig.mp4'],


        // Add more foods as needed
    ];

    // Insert numbers into the database
    foreach ($foods as $food) {
        Food::create([
            'food' => $food['food'],
            'video_path' => $food['video_path'],
        ]);
    }
    }
}
