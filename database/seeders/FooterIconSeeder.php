<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_icons')->insert([
            [
                "i"=>"ion-social-facebook"
            ],
            [
                "i"=>"ion-social-twitter"
            ],
            [
                "i"=>"ion-social-instagram"
            ],
            [
                "i"=>"ion-social-googleplus"
            ],
            [
                "i"=>"ion-social-tumblr"
            ],
            [
                "i"=>"ion-social-dribbble"
            ],
        ]);
    }
}
