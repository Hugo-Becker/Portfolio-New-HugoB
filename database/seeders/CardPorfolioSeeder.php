<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardPorfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_porfolios')->insert([
            [
                "src"=>"assets/img/portfolio/portfolio-1.jpg",
                "h4"=>"App 1",
                "p"=>"App",
                "filter"=>"filter-app"

            ],
            [
                "src"=>"assets/img/portfolio/portfolio-2.jpg",
                "h4"=>"Web 3",
                "p"=>"Web",
                "filter"=>"filter-web"


            ],
            [
                "src"=>"assets/img/portfolio/portfolio-3.jpg",
                "h4"=>"App 2",
                "p"=>"App",
                "filter"=>"filter-app"


            ],
            [
                "src"=>"assets/img/portfolio/portfolio-4.jpg",
                "h4"=>"Card 2",
                "p"=>"Card",
                "filter"=>"filter-card"


            ],
            [
                "src"=>"assets/img/portfolio/portfolio-5.jpg",
                "h4"=>"Web 2",
                "p"=>"Web",
                "filter"=>"filter-web"


            ],
            [
                "src"=>"assets/img/portfolio/portfolio-6.jpg",
                "h4"=>"App 3",
                "p"=>"App",
                "filter"=>"filter-app"


            ],

        ]);
    }
}
