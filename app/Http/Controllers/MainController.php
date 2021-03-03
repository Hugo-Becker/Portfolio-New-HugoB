<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Adress;
use App\Models\CardPorfolio;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\FooterIcon;
use App\Models\Hero;
use App\Models\liHero;
use App\Models\LiPorfolio;
use App\Models\Mail;
use App\Models\Main;
use App\Models\Navbar;
use App\Models\Phone;
use App\Models\Porfolio;
use App\Models\Services;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav=Navbar::all();
        $hero=Hero::all();
        $liHero=liHero::all();
        $about=About::all();
        $services=Services::all();
        $porfolio=Porfolio::all();
        $liPorfolio=LiPorfolio::all();
        $cardPorfolio=CardPorfolio::all();
        $contact=Contact::all();
        $adress=Adress::all();
        $phone=Phone::all();
        $mail=Mail::all();
        $footerIcon=FooterIcon::all();
        $footer=Footer::all();
        $footerExplode=explode('/', $footer[0]->credits);



        return view('welcome', compact(
            

            'nav',
            'hero',
            'liHero',
            'about',
            'services',
            'porfolio',
            'liPorfolio',
            'cardPorfolio',
            'contact',
            'adress',
            'phone',
            'mail',
            'footerIcon',
            'footer',
            "footerExplode"


        ));
    }

    
}
