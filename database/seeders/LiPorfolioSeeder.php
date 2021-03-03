<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiPorfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('li_porfolios')->insert([

            ["content"=>"All",
             "filter"=>'*'],

            ["content"=>"App",
             "filter"=>'.filter-app'],

            ["content"=>"Card",
             "filter"=>'.filter-card'
            ],
            ["content"=>"Web",
            "filter"=>'.filter-web'],

        ]);
    }
}
