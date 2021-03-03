<?php

namespace Database\Seeders;

use App\Models\Adress;
use App\Models\Services;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            NavbarSeeder::class,
            HeroSeeder::class,
            LiHeroSeeder::class,
            AboutSeeder::class,
            ServicesSeeder::class,
            PorfolioSeeder::class,
            LiPorfolioSeeder::class,
            CardPorfolioSeeder::class,
            ContactSeeder::class,
            AdressSeeder::class,
            PhoneSeeder::class,
            MailSeeder::class,
            FooterIconSeeder::class,
            FooterSeeder::class
            ]);
    }
}
