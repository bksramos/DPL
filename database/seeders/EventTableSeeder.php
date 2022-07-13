<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        [
            'title'         => 'Reunião',
            'type'          => 'Briefing',
            'start'         => '2022-04-20 21:30:00',
            'end'           => '2022-04-21 21:30:00',
            'color'         => '#c40233',
            'description'   => 'Reunião com o cliente'
        ],
        [
            'title'         => 'Ligar para cliente',
            'type'          => 'Debriefing',
            'start'         => '2022-04-22' ,
            'end'           => '2022-04-23',
            'color'         => '#29fdf2',
            'description'   => 'Ligar para fulano de tal'
        ]


    ]);
    }
}
