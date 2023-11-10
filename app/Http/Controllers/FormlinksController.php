<?php

namespace App\Http\Controllers;

use App\Models\Formlink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormlinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $form = Formlink::all();
        $form = DB::table('forms')
            ->rightJoin('formlinks', 'forms.id_forms', '=', 'formlinks.id_forms')
            ->select('forms.id_forms', 'forms.nama_form', 'formlinks.id_link', 'formlinks.nama_formlink', 'formlinks.link')
            ->get();
        return view('Fasilitas.Formulir', compact('form'));
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
     * @param  \App\Models\Formlink  $formlink
     * @return \Illuminate\Http\Response
     */
    public function show(Formlink $formlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formlink  $formlink
     * @return \Illuminate\Http\Response
     */
    public function edit(Formlink $formlink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formlink  $formlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formlink $formlink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formlink  $formlink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formlink $formlink)
    {
        //
    }
}
