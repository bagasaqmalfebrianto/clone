<?php

namespace App\Http\Controllers;

use App\Models\Dictionarie;
use Illuminate\Http\Request;

class DictionariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamus = Dictionarie::simplePaginate(10);
        return view('Kamus', compact('kamus'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dictionarie  $dictionarie
     * @return \Illuminate\Http\Response
     */
    public function show(Dictionarie $dictionarie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dictionarie  $dictionarie
     * @return \Illuminate\Http\Response
     */
    public function edit(Dictionarie $dictionarie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dictionarie  $dictionarie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dictionarie $dictionarie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dictionarie  $dictionarie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dictionarie $dictionarie)
    {
        //
    }
}
