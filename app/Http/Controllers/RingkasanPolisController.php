<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PolisAktif;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class RingkasanPolisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data_user = User::all();

        // Buat array kosong untuk menyimpan jumlah data ProfilPolis berdasarkan ID User
        $jumlahDataProfilPolis = [];

        // Loop melalui data User
        foreach ($data_user as $user) {
            $jumlahDataProfilPolis[$user->id] = PolisAktif::where('user_id', $user->id)->count();
        }

        return view('RingkasanPolisAdmin.index', [
            'data_user' => $data_user,
            'jumlahDataProfilPolis' => $jumlahDataProfilPolis,

        ]);
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
    public function show(User $RingkasanPolisAdmin)
    {
        //
        // return view('RingkasanPolisAdmin.create');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $RingkasanPolisAdmin)
    {
        //
        return view('RingkasanPolisAdmin.edit',[
            'data_user'=>$RingkasanPolisAdmin
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $RingkasanPolisAdmin)
    {
        //
          try {

        $rules = [
            'no_rek' => 'required|max:255',
            'nama_lengkap' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'nik' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:255',
            'no_telp2' => 'max:255',
            'foto_ktp' => 'image|file|max:10024', // Pastikan ada atribut 'foto_ktp' di dalam form
            'foto_kk' => 'image|file|max:10024', // Pastikan ada atribut 'foto_kk' di dalam form
            'foto_pribadi' => 'image|file|max:10024', // Pastikan ada atribut 'foto_pribadi' di dalam form
            // 'email' => 'required|email:dns|unique:users',
            // 'email2' => 'email:dns|unique:users',
        ];


        if($request->email != $RingkasanPolisAdmin->email){
            $rules['email'] = 'required|unique:users|email:dns';
        }

        if($request->email2 != $RingkasanPolisAdmin->email2){
            $rules['email2'] = 'required|unique:users|email:dns';
        }

        $validatedData = $request->validate($rules);


        if($request->file('foto_ktp')){
            // kalo gambar lama ada maka dihapus
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_ktp']=$request->file('foto_ktp')->store('ktp-images');
        }
        if($request->file('foto-kk')){
            // kalo gambar lama ada maka dihapus
            if($request->oldImage_kk){
                Storage::delete($request->oldImage_kk);
            }
            $validatedData['foto-kk']=$request->file('foto-kk')->store('kk-images');
        }
        if($request->file('foto-pribadi')){
            // kalo gambar lama ada maka dihapus
            if($request->oldImage_pribadi){
                Storage::delete($request->oldImage_pribadi);
            }
            $validatedData['foto-pribadi']=$request->file('foto-pribadi')->store('pribadi-images');
        }

        User::where('id', $RingkasanPolisAdmin->id)
                    ->update($validatedData);


                    return response()->json([
                        'status' => 'Sukses',
                        'message' => 'data tidak ada',
                    ]);

    } catch (QueryException $e) {
        // Tangani exception jika terjadi kesalahan database
        return response()->json([
            'status' => 'Error',
            'message' => 'Terjadi kesalahan database: ' . $e->getMessage(),
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


    public function getPolisDetail($id)
    {
        $polisDetail = User::where('id', $id)->first();

        return response()->json($polisDetail);
    }
}
