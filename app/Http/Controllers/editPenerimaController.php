<?php

namespace App\Http\Controllers;

use App\Models\PolisAktif;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class editPenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit(PolisAktif $editPenerima)
    {
        //

    //     $user = PolisAktif::findOrFail($id);

    // $urlId = $id;
    return view('editPenerima.edit',[
        'data_user'=>$editPenerima


    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PolisAktif $editPenerima)
    {
        //

        try {

            $rules = [
                'nama_penerima' => ['required', 'min:3', 'max:255'],
                'alamat' => 'required',
                'user_id' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'nik' => 'required',
                'no_ktp' => 'required',
                'no_telp' => 'required',
                'foto_ktp' => 'image|file|max:10024',
                // 'umur' => 'required',
                'foto_kk' => 'image|file|max:10024',
                'email' => 'required|email:dns', // Ganti 'email2' dengan 'email'
                'jenis_asuransi' => 'required',
                'periode_pembayaran' => 'required',
                'jumlah_tanggungan' => 'required|min:5|max:255',
            ];



            $validatedData = $request->validate($rules);


            if($request->file('foto_ktp')){
                // kalo gambar lama ada maka dihapus
                if($request->oldImage){
                    Storage::delete($request->oldImage);
                }
                $validatedData['foto_ktp']=$request->file('foto_ktp')->store('penerima-image-ktp');
            }
            if($request->file('foto_kk')){
                // kalo gambar lama ada maka dihapus
                if($request->oldImage_kk){
                    Storage::delete($request->oldImage_kk);
                }
                $validatedData['foto_kk']=$request->file('foto_kk')->store('penerima-image-kk');
            }
            // if($request->file('foto-pribadi')){
            //     // kalo gambar lama ada maka dihapus
            //     if($request->oldImage_pribadi){
            //         Storage::delete($request->oldImage_pribadi);
            //     }
            //     $validatedData['foto-pribadi']=$request->file('foto-pribadi')->store('penerima-image-pribadi');
            // }

            PolisAktif::where('id', $editPenerima)
                        ->update($validatedData);


                        return response()->json([
                            'status' => 'Sukses',
                            'message' => 'data tidak ada',
                        ]);

                    } catch (ValidationException $e) {
                        // Tangani exception jika terjadi kesalahan validasi
                        return response()->json([
                            'status' => 'Error',
                            'message' => 'Terjadi kesalahan validasi: ' . $e->validator->errors()->first(),
                        ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
