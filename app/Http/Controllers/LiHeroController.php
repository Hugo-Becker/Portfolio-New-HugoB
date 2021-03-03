<?php

namespace App\Http\Controllers;

use App\Models\liHero;
use Illuminate\Http\Request;

class LiHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\liHero  $liHero
     */
    public function store(Request $request)
    {

        $store= new liHero();
        $store->i=$request->i;
        $store->href=$request->href;


        $store->save();

        // return redirect('/showHeroIcon/' . {{$updateEntry->id}});
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\liHero  $liHero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=liHero::find($id);
        return view('shows.showHeroIcon',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\liHero  $liHero
     * @return \Illuminate\Http\Response
     */
    public function edit(liHero $liHero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\liHero  $liHero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateEntry=liHero::find($id);

        $updateEntry->i=$request->i;
        $updateEntry->href=$request->href;


        $updateEntry->save();

        // return redirect('/showHeroIcon/' . {{$updateEntry->id}});
        return redirect()->back();


    }

    public function add(Request $request)
    {

       return view('add.addHeroIcon');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\liHero  $liHero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=liHero::find($id);

        $destroy->delete();

        return  redirect('/editHero');
    }
}
