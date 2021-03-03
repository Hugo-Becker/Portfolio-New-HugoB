<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [
                "i"=>"ion-ios-browsers-outline",
                "span"=>"UI/UX DESIGN",
                "p"=>"To an English person, it will seem like simplified English,told me what"
            ],
            [
                "i"=>"ion-ios-lightbulb-outline",
                "span"=>"BRAND IDENTITY",
                "p"=>"To an English person, it will seem like simplified English,told me what "
            ],
            [
                "i"=>"ion-ios-color-wand-outline",
                "span"=>"WEB DESIGN",
                "p"=>"To an English person, it will seem like simplified English,told me what "
            ],
            [
                "i"=>"ion-social-android-outline",
                "span"=>"MOBILE APPS",
                "p"=>"To an English person, it will seem like simplified English,told me what "
            ],
            [
                "i"=>"ion-ios-analytics-outline",
                "span"=>"Analytics",
                "p"=>"To an English person, it will seem like simplified English,told me what "
            ],
            [
                "i"=>"ion-ios-camera-outline",
                "span"=>"PHOTOGRAPHY",
                "p"=>"To an English person, it will seem like simplified English,told me what "
            ],
            
        ]);

    }
}
