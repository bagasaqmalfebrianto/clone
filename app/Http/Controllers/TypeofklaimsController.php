<?php

namespace App\Http\Controllers;

use App\Models\Typeofklaim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeofklaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syarat = DB::table('klaims')
            ->rightJoin('typeofklaims', 'klaims.id_klaim', '=', 'typeofklaims.id_klaim')
            ->select('klaims.id_klaim', 'klaims.nama_klaim', 'klaims.keterangan', 'typeofklaims.id_type', 'typeofklaims.nama_type', 'typeofklaims.keterangan_type', 'typeofklaims.gambar')
            ->get();
        return view('Fasilitas.Syarat', compact('syarat'));
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
     * @param  \App\Models\Typeofklaim  $typeofklaim
     * @return \Illuminate\Http\Response
     */
    public function show(Typeofklaim $typeofklaim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeofklaim  $typeofklaim
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeofklaim $typeofklaim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeofklaim  $typeofklaim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeofklaim $typeofklaim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeofklaim  $typeofklaim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeofklaim $typeofklaim)
    {
        //
    }
}
