<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'Register'
        ]);
    }


    public function store(Request $request) {
        $validasiData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns',
            'is_polis' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        // Periksa apakah nomor polis dan nomor lac ada dalam database
        $user = User::where('no_polis', $request['no_polis'])->orWhere('no_lac', $request['no_lac'])->first();

        if ($user) {
            // Jika nomor polis atau nomor lac sudah ada, update data pengguna yang ada
            $user->update($validasiData);

            // Alert::success('Congrats', 'You Have Added the Data');
            return redirect('/login')->with('success', 'Task Created Successfully!');
            // OR;
        } else {
            // Jika nomor polis dan nomor lac belum ada, buat data pengguna baru
            return response()->json([
                'status' => 'error',
                'message' => 'data tidak ada',
            ]);
        }
    }

    // public function update(Request $request, User $user){
    //     $rules = [
    //         'username'=>['required','min:3','max:255','unique:users'],
    //         //bisa pakai array
    //         'email'=>'required|email:dns|unique:users',
    //         'is_admin'=>'required',
    //         'password'=>'required|min:5|max:255'
    //     ];

    //     $noPolisExists = User::where('no_polis', $user->no_polis)->exists();
    //     $noLacExists = User::where('no_lac', $user->no_lac)->exists();

    //     if (!$noPolisExists || !$noLacExists) {
    //         return redirect('/register')->with('warning', 'Nomor Lac sudah ada dalam database.');

    //         $validatedData = $request->validate($rules);

    //         $user->update($validatedData);


    // }

//     public function store(Request $request){
//         $validasiData = $request->validate([
//             // 'no_polis'=> 'required|max:255',
//             // 'no_lac'=> 'required|max:255',
//             'username'=>['required','min:3','max:255','unique:users'],
//             //bisa pakai array
//             'email'=>'required|email:dns|unique:users',
//             'is_admin'=>'required',
//             'password'=>'required|min:5|max:255'
//         ]);

//         // Periksa apakah nomor polis dan nomor lac ada dalam database
//         $noPolisExists = User::where('no_polis', $request['no_polis'])->exists();
//         $noLacExists = User::where('no_lac', $request['no_lac'])->exists();

//         if (!$noPolisExists || !$noLacExists) {
//             return redirect('/register')->with('warning', 'Nomor Lac sudah ada dalam database.');
//         }
//         User::create($validasiData);


// return response()->json([
//             'status' => 'success',
//             'message' => 'Selamat, Anda telah berhasil mendaftar!',
//         ]);
// //         return redirect('/login')->with('success', 'REGISTRASI BERHASIL');

//     }
}
