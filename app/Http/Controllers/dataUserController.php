<?php

namespace App\Http\Controllers;

use App\Models\UserUtama;
use Illuminate\Http\Request;

class dataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.admin.index');
    }

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
        $validasiData = $request->validate([
            'nama'=> 'required|max:255',
            'username'=> 'required|max:255',
            'alamat'=>['required','min:3','max:255','unique:user_utamas'],
            //bisa pakai array
            'email'=>'required|email:dns|unique:user_utamas',
            'no_telp'=>'required',
            'nik'=>'required|min:5|max:255',
            'no_rek'=>'required|min:5|max:255',
            'npwp'=>'required|min:5|max:255'
        ]);

        UserUtama::create($validasiData);
// return response()->json([
//             'status' => 'success',
//             'message' => 'Selamat, Anda telah berhasil mendaftar!',
//         ]);
        return redirect('/login')->with('success', 'REGISTRASI BERHASIL');

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
