<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            
            [
                "href"=>"/",
                "content"=>"Home"
            ],
            [
                "href"=>"#about",
                "content"=>"About"
            ],
            [
                "href"=>"#portfolio",
                "content"=>"Portfolio"
            ],
            [
                "href"=>"#contact",
                "content"=>"Contact"
            ],
            [
                "href"=>"/editHero",
                "content"=>"Creation"
            ]
        

        ]);
    }
}
