<?php

namespace App\Http\Controllers;

use App\Models\CardPorfolio;
use App\Models\LiPorfolio;
use App\Models\Porfolio;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolio = Porfolio::all();
        $liPorfolio = LiPorfolio::all();
        $cardPorfolio = CardPorfolio::all();



        return view('edits.editPortfolio', compact('porfolio', 'liPorfolio', 'cardPorfolio'));
    }

    public function add()
    {
        return view('Add.addCard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entry=new CardPorfolio();

        $entry->h4=$request->h4;
        $entry->p=$request->p;
        $entry->filter=$request->filter;
        $entry->src=$request->src;

        $entry->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $show = CardPorfolio::find($id);
        return view('shows.showPorfolio', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Porfolio $porfolio)
    {
        return view('edits.editPorfolioCard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validation=$request->validate([

            "h4"=>"required",
            "p"=>"required",
            "filter"=>"required",
            "src"=>"required",
           
           ]);
        $update = CardPorfolio::find($id);
        $update->h4 = $request->h4;
        $update->p = $request->p;
        $update->filter = $request->filter;
        $update->src = $request->src;


        $update->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=CardPorfolio::find($id);

        $destroy->delete();

        return redirect()->back();


    }
}
