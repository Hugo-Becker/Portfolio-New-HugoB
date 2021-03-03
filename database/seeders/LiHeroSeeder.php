<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('li_heroes')->insert([
            [
                "i"=>"ion-social-facebook",
                "href"=>"#"
            ],
            [
                "i"=>"ion-social-twitter",
                "href"=>"#"
            ],
            [
                "i"=>"ion-social-instagram",
                "href"=>"#"
            ],
            [
                "i"=>"ion-social-googleplus",
                "href"=>"#"
            ],
            [
                "i"=>"ion-social-tumblr",
                "href"=>"#"
            ],
            [
                "i"=>"ion-social-dribbble",
                "href"=>"#"
            ],
        ]);
    }
}
