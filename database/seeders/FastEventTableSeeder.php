<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FastEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fast_events')->insert([
        [
            'title'         => 'Entrevista',
            'type'          => 'Briefing',
            'start'         => '17:30:00',
            'end'           => '21:30:00',
            'color'         => '#c40233'
        ],
        [
            'title'         => 'Ligar para chefe',
            'type'          => 'Debriefing',
            'start'         => '21:30:00' ,
            'end'           => '21:40:00',
            'color'         => '#29fdf2'
        ]


        ]);
    }
}
