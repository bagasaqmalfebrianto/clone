<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PolisAktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RingkasanPolisUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        // Menggunakan foto_ktp dari pengguna yang sedang login
        $foto_ktp_path = $user->foto_ktp;


        // dd($foto_ktp_path);

        $data_user = User::where('id',auth()->user()->id)->get();

        // Buat array kosong untuk menyimpan jumlah data ProfilPolis berdasarkan ID User
        $jumlahDataProfilPolis = [];

        // Loop melalui data User
        foreach ($data_user as $user) {
            $jumlahDataProfilPolis[$user->id] = PolisAktif::where('user_id', $user->id)->count();
        }


        return view('RingkasanPolisUser.index', [
            'data_user' => $data_user,
            'jumlahDataProfilPolis' => $jumlahDataProfilPolis,
            'data_polis'=>PolisAktif::where('user_id', auth()->user()->id)->get(),
            'foto_ktp'=>$foto_ktp_path
        ]);
    }
        // return view('RingkasanPolisUser.index',[
        //     'data_user'=>User::where('id',auth()->user()->id)->get()
        // ]);


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
