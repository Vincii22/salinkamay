<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TimeExpression;

class TimeExpressionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Sample numbers and their video filenames
       $time_expressions = [
        ['time_expression' => '1PM', 'video_path' => 'signs/expressions/1PM.mp4'],
        ['time_expression' => '1 PM', 'video_path' => 'signs/expressions/1PM.mp4'],
        ['time_expression' => '2PM', 'video_path' => 'signs/expressions/2PM.mp4'],
        ['time_expression' => '2 PM', 'video_path' => 'signs/expressions/2PM.mp4'],
        ['time_expression' => '3PM', 'video_path' => 'signs/expressions/3PM.mp4'],
        ['time_expression' => '3 PM', 'video_path' => 'signs/expressions/3PM.mp4'],
        ['time_expression' => '4PM', 'video_path' => 'signs/expressions/4PM.mp4'],
        ['time_expression' => '4 PM', 'video_path' => 'signs/expressions/4PM.mp4'],
        ['time_expression' => '5PM', 'video_path' => 'signs/expressions/5PM.mp4'],
        ['time_expression' => '5 PM', 'video_path' => 'signs/expressions/5PM.mp4'],
        ['time_expression' => '6PM', 'video_path' => 'signs/expressions/6PM.mp4'],
        ['time_expression' => '6 PM', 'video_path' => 'signs/expressions/6PM.mp4'],
        ['time_expression' => '7PM', 'video_path' => 'signs/expressions/7PM.mp4'],
        ['time_expression' => '7 PM', 'video_path' => 'signs/expressions/7PM.mp4'],
        ['time_expression' => '8PM', 'video_path' => 'signs/expressions/8PM.mp4'],
        ['time_expression' => '8 PM', 'video_path' => 'signs/expressions/8PM.mp4'],
        ['time_expression' => '9PM', 'video_path' => 'signs/expressions/9PM.mp4'],
        ['time_expression' => '9 PM', 'video_path' => 'signs/expressions/9PM.mp4'],
        ['time_expression' => '10PM', 'video_path' => 'signs/expressions/10PM.mp4'],
        ['time_expression' => '10 PM', 'video_path' => 'signs/expressions/10PM.mp4'],
        ['time_expression' => '11PM', 'video_path' => 'signs/expressions/11PM.mp4'],
        ['time_expression' => '11 PM', 'video_path' => 'signs/expressions/11PM.mp4'],
        ['time_expression' => '12PM', 'video_path' => 'signs/expressions/12 NOON.mp4'],
        ['time_expression' => '12 PM', 'video_path' => 'signs/expressions/12 NOON.mp4'],
        ['time_expression' => '12 NOON', 'video_path' => 'signs/expressions/12 NOON.mp4'],
        ['time_expression' => '6AM', 'video_path' => 'signs/expressions/6AM.mp4'],
        ['time_expression' => '6 AM', 'video_path' => 'signs/expressions/6AM.mp4'],
        ['time_expression' => '7AM', 'video_path' => 'signs/expressions/7AM.mp4'],
        ['time_expression' => '7 AM', 'video_path' => 'signs/expressions/7AM.mp4'],
        ['time_expression' => '8AM', 'video_path' => 'signs/expressions/8AM.mp4'],
        ['time_expression' => '8 AM', 'video_path' => 'signs/expressions/8AM.mp4'],
        ['time_expression' => '9AM', 'video_path' => 'signs/expressions/9AM.mp4'],
        ['time_expression' => '9 AM', 'video_path' => 'signs/expressions/9AM.mp4'],
        ['time_expression' => '10AM', 'video_path' => 'signs/expressions/10AM.mp4'],
        ['time_expression' => '10 AM', 'video_path' => 'signs/expressions/10AM.mp4'],
        ['time_expression' => '11AM', 'video_path' => 'signs/expressions/11AM.mp4'],
        ['time_expression' => '11 AM', 'video_path' => 'signs/expressions/11AM.mp4'],
        ['time_expression' => '12AM', 'video_path' => 'signs/expressions/12AM.mp4'],
        ['time_expression' => '12 AM', 'video_path' => 'signs/expressions/12AM.mp4'],
        ['time_expression' => '12:30', 'video_path' => 'signs/expressions/12 colon 30.mp4'],
        ['time_expression' => 'Alam mo ba kung anong oras na?', 'video_path' => 'signs/expressions/alam mo ba kung anong oras na.mp4'],
        ['time_expression' => 'Anong oras na?', 'video_path' => 'signs/expressions/alam mo ba kung anong oras na.mp4'],
        ['time_expression' => 'Alam mo kung anong oras na?', 'video_path' => 'signs/expressions/alam mo ba kung anong oras na.mp4'],
        ['time_expression' => 'Do you know the time?', 'video_path' => 'signs/expressions/alam mo ba kung anong oras na.mp4'],
        ['time_expression' => 'Anong oras aalis ang bus?', 'video_path' => 'signs/expressions/anong oras aalis ang bus.mp4'],
        ['time_expression' => 'When will the bus leave?', 'video_path' => 'signs/expressions/anong oras aalis ang bus.mp4'],
        ['time_expression' => 'What time is the bus leaving?', 'video_path' => 'signs/expressions/anong oras aalis ang bus.mp4'],
        ['time_expression' => 'Anong oras magsisimula ang concert?', 'video_path' => 'signs/expressions/anong oras magsisimula ang konsiyerto.mp4'],
        ['time_expression' => 'Anong oras magsisimula ang konsiyerto?', 'video_path' => 'signs/expressions/anong oras magsisimula ang konsiyerto.mp4'],
        ['time_expression' => 'What time will the concert start?', 'video_path' => 'signs/expressions/anong oras magsisimula ang konsiyerto.mp4'],
        ['time_expression' => 'When will the concert start?', 'video_path' => 'signs/expressions/anong oras magsisimula ang konsiyerto.mp4'],
        ['time_expression' => 'Anong oras magsisimula ang laro sa basketball?', 'video_path' => 'signs/expressions/anong oras magsisimula ang laro sa basketball.mp4'],
        ['time_expression' => 'What time will the basketball start?', 'video_path' => 'signs/expressions/anong oras magsisimula ang laro sa basketball.mp4'],
        ['time_expression' => 'Anong oras magsisimula ang pelikula?', 'video_path' => 'signs/expressions/anong oras magsisimula ang pelikula.mp4'],
        ['time_expression' => 'What time will the movie start?', 'video_path' => 'signs/expressions/anong oras magsisimula ang pelikula.mp4'],
        ['time_expression' => 'Anong oras na?', 'video_path' => 'signs/expressions/ANONG ORAS NA.mp4'],
        ['time_expression' => 'What time is it?', 'video_path' => 'signs/expressions/ANONG ORAS NA.mp4'],
        ['time_expression' => 'What time?', 'video_path' => 'signs/expressions/anong oras.mp4'],
        ['time_expression' => 'Anong oras?', 'video_path' => 'signs/expressions/anong oras.mp4'],
        ['time_expression' => 'Tomorrow', 'video_path' => 'signs/expressions/bukas.mp4'],
        ['time_expression' => 'Bukas', 'video_path' => 'signs/expressions/bukas.mp4'],
        ['time_expression' => 'Dati', 'video_path' => 'signs/expressions/dati before.mp4'],
        ['time_expression' => 'Before', 'video_path' => 'signs/expressions/dati before.mp4'],
        ['time_expression' => 'Gabi', 'video_path' => 'signs/expressions/GABI.mp4'],
        ['time_expression' => 'Evening', 'video_path' => 'signs/expressions/GABI.mp4'],
        ['time_expression' => 'Hapon', 'video_path' => 'signs/expressions/HAPON.mp4'],
        ['time_expression' => 'Afternoon', 'video_path' => 'signs/expressions/HAPON.mp4'],
        ['time_expression' => 'Hi Anong Oras Na?', 'video_path' => 'signs/expressions/HI ANONG ORAS NA.mp4'],
        ['time_expression' => 'Hi What Time is it?', 'video_path' => 'signs/expressions/HI ANONG ORAS NA.mp4'],
        ['time_expression' => 'Ingat', 'video_path' => 'signs/expressions/ingat.mp4'],
        ['time_expression' => 'Take Care', 'video_path' => 'signs/expressions/ingat.mp4'],
        ['time_expression' => 'Kahapon', 'video_path' => 'signs/expressions/kahapon.mp4'],
        ['time_expression' => 'Yesterday', 'video_path' => 'signs/expressions/kahapon.mp4'],
        ['time_expression' => 'Kanina', 'video_path' => 'signs/expressions/kanina.mp4'],
        ['time_expression' => 'Mamaya', 'video_path' => 'signs/expressions/mamaya later.mp4'],
        ['time_expression' => 'Later', 'video_path' => 'signs/expressions/mamaya later.mp4'],
        ['time_expression' => 'Nakaraan', 'video_path' => 'signs/expressions/nakaraan past.mp4'],
        ['time_expression' => 'Past', 'video_path' => 'signs/expressions/nakaraan past.mp4'],
        ['time_expression' => 'Ngayon Na', 'video_path' => 'signs/expressions/ngayon na.mp4'],
        ['time_expression' => 'Right Now', 'video_path' => 'signs/expressions/ngayon na.mp4'],
        ['time_expression' => 'Ngayon', 'video_path' => 'signs/expressions/ngayon.mp4'],
        ['time_expression' => 'Now', 'video_path' => 'signs/expressions/ngayon.mp4'],
        ['time_expression' => 'Or', 'video_path' => 'signs/expressions/OR.mp4'],
        ['time_expression' => 'O', 'video_path' => 'signs/expressions/OR.mp4'],
        ['time_expression' => 'Paalam', 'video_path' => 'signs/expressions/paalam.mp4'],
        ['time_expression' => 'Goodbye', 'video_path' => 'signs/expressions/paalam.mp4'],
        ['time_expression' => 'Good bye', 'video_path' => 'signs/expressions/paalam.mp4'],
        ['time_expression' => 'Pwede mo bang sabihin ang oras', 'video_path' => 'signs/expressions/pwede mo bang sabihin ang oras.mp4'],
        ['time_expression' => 'Can you tell the time', 'video_path' => 'signs/expressions/pwede mo bang sabihin ang oras.mp4'],
        ['time_expression' => 'Can you tell me the time', 'video_path' => 'signs/expressions/pwede mo bang sabihin ang oras.mp4'],
        ['time_expression' => 'Relo', 'video_path' => 'signs/expressions/RELO.mp4'],
        ['time_expression' => 'Watch', 'video_path' => 'signs/expressions/RELO.mp4'],
        ['time_expression' => 'See you later', 'video_path' => 'signs/expressions/see you later.mp4'],
        ['time_expression' => 'See you tomorrow', 'video_path' => 'signs/expressions/see you tomorrow.mp4'],
        ['time_expression' => 'Susunod na linggo', 'video_path' => 'signs/expressions/susunod na linggo.mp4'],
        ['time_expression' => 'Next Sunday', 'video_path' => 'signs/expressions/susunod na linggo.mp4'],
        ['time_expression' => 'Susunod', 'video_path' => 'signs/expressions/susunod next.mp4'],
        ['time_expression' => 'Next', 'video_path' => 'signs/expressions/susunod next.mp4'],
        ['time_expression' => 'Tanghali', 'video_path' => 'signs/expressions/TANGHALI.mp4'],
        ['time_expression' => 'Noon', 'video_path' => 'signs/expressions/TANGHALI.mp4'],
        ['time_expression' => 'Thank You', 'video_path' => 'signs/expressions/thank you.mp4'],
        ['time_expression' => 'Salamat', 'video_path' => 'signs/expressions/thank you.mp4'],
        ['time_expression' => 'Umaga', 'video_path' => 'signs/expressions/UMAGA.mp4'],
        ['time_expression' => 'Morning', 'video_path' => 'signs/expressions/UMAGA.mp4'],
        ['time_expression' => 'Walang Anuman', 'video_path' => 'signs/expressions/walang anuman.mp4'],
        ['time_expression' => 'You are welcome', 'video_path' => 'signs/expressions/walang anuman.mp4'],

        // Add more numbers as needed
    ];

    // Insert numbers into the database
    foreach ($time_expressions as $time_expression) {
        TimeExpression::create([
            'time_expression' => $time_expression['time_expression'],
            'video_path' => $time_expression['video_path'],
        ]);
    }
    }
}
