<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\CartController;
// use App\Http\Controllers\IklanController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\BarangController;
// use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\OrderItemController;
// use App\Http\Controllers\editStatusController;
use App\Http\Controllers\dataPenjualController;
use App\Http\Controllers\dataUserController;
use App\Http\Controllers\editPenerimaController;
use App\Http\Controllers\RingkasanPolisController;
use App\Http\Controllers\RingkasanPolisUser;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/katalog', function () {
    return view('katalog', [
        'title' => 'Katalog',

    ]);
});

Route::get('/home', function () {
    return view('home');
});


//Dashboard

// Route::resource('/dashboard',DashboardController::class)->middleware('auth');

//Dashboard Admin

Route::resource('/nasabah',dataUserController::class);


// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::Post('/register', [RegisterController::class, 'store']);

//Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//nasabah
Route::get('/profile', function () {return view('nasabah.profilenasabah');});
Route::get('/editprofile', function () {return view('nasabah.editprofilenasabah');});
Route::get('/detailbayar', function () {return view('nasabah.detailbayar');});
Route::get('/detailpolis', function () {return view('nasabah.detailpolis');});

//Data Lengkap Nasabah
Route::get('/historiperubahan', function () {return view('DataNasabah.histori-perubahan');});
Route::get('/tagihanpremi', function () {return view('DataNasabah.tagihan-premi');});
Route::get('/historiclaim', function () {return view('DataNasabah.histori-klaim');});
Route::get('/historipembayaran', function () {return view('DataNasabah.histori-pembayaran');});

// Route::get('/DataPersonal1', function () {return view('dashboard.DataPersonal1');});

// Route::get('/RingkasanPolis', function () {
//     return view('RP.RingkasanPolis');
// });

//DashboardAdmin
Route::get('/TambahPengguna',[DashboardAdminController::class,'index'])->middleware('auth');
Route::post('/TambahPengguna',[DashboardAdminController::class,'store']);

Route::get('/PilihPolis',[DashboardAdminController::class,'daftarPolis'])->middleware('auth');

Route::post('/PilihPolis',[DashboardAdminController::class,'tambahdaftarPolis'])->middleware('auth');

Route::resource('/RingkasanPolisAdmin',RingkasanPolisController::class)->middleware('auth');

Route::resource('/RingkasanPolisUser',RingkasanPolisUser::class)->middleware('auth');

Route::get('/RingkasanPolisAdmin/TambahPengguna/{id}', [DashboardAdminController::class,'show'])->middleware('auth');

Route::post('/RingkasanPolisAdmin/TambahPengguna/{id}', [DashboardAdminController::class, 'TambahPengguna'])->middleware('auth');

Route::get('/RingkasanPolisAdmin/DetailPolis/{id}',[DashboardAdminController::class,'showDetail'])->middleware('auth');



Route::get('/Pembayaran/{id}',[DashboardAdminController::class,'bayar'])->middleware('auth');

Route::get('/Pembayaran/{id}',[DashboardAdminController::class,'bayar'])->middleware('auth');

Route::get('RingkasanPolisAdmin/DetailPolis/Penerima/{id}',[DashboardAdminController::class,'detailPenerima'])->middleware('auth');


Route::resource('/editPenerima',editPenerimaController::class)->middleware('auth');

// Route::resource('/RingkasanPolisUser',RingkasanPolisUser::class)->middleware('auth');

// Route::get('RingkasanPolisAdmin/DetailPolis/Penerima/Edit/{id}',[DashboardAdminController::class,'showEditPenerima'])->middleware('auth');

// Route::post('RingkasanPolisAdmin/DetailPolis/Penerima/Edit/{id}',[DashboardAdminController::class,'editPenerima'])->middleware('auth');

// Route::get('/get-polis-detail/{noPolis}',[RingkasanPolisController::class, 'getPolisDetail'])->middleware('auth');


// Route::get('/Pembayaran',[DashboardAdminController::class,'asu'])->middleware('auth');



// Route::resource('/RingkasanPolisUser',RingkasanPolisUser::class,'RingkasanPolisAdmin.create')->middleware('auth');

//



Route::get('/ProfilPolis1', function () {return view('ProfilPolis.ProfilPolis1');});
Route::get('/DataPersonal1', function () {return view('ProfilPolis.DataPersonal1');});
Route::get('/PenerimaManfaat1', function () {return view('ProfilPolis.PenerimaManfaat1');});
Route::get('/RincianAgen1', function () {return view('ProfilPolis.RincianAgen1');});
Route::get('/RincianUnitLink1', function () {return view('ProfilPolis.RincianUnitLink1');});
Route::get('/RincianUnitLink1_2', function () {return view('ProfilPolis.RincianUnitLink1_2');});

Route::get('/ProfilPolis2', function () {return view('ProfilPolis.ProfilPolis2');});
Route::get('/DataPersonal2', function () {return view('ProfilPolis.DataPersonal2');});
Route::get('/PenerimaManfaat2', function () {return view('ProfilPolis.PenerimaManfaat2');});
Route::get('/RincianAgen2', function () {return view('ProfilPolis.RincianAgen2');});
Route::get('/RincianUnitLink2', function () {return view('ProfilPolis.RincianUnitLink2');});
Route::get('/RincianUnitLink2_2', function () {return view('ProfilPolis.RincianUnitLink2_2');});

Route::get('/HistoriPerubahan1', function () {return view('RT.HistoriPerubahan1');});
Route::get('/TagihanPremi1', function () {return view('RT.TagihanPremi1');});
Route::get('/HistoriKlaim1', function () {return view('RT.HistoriKlaim1');});
Route::get('/HistoriPembayaran1', function () {return view('RT.HistoriPembayaran1');});
// Route::get('/Kamus', function () {
    //     return view('Kamus');
    // });

Route::get('/HistoriPerubahan2', function () {return view('RT.HistoriPerubahan2');});
Route::get('/TagihanPremi2', function () {return view('RT.TagihanPremi2');});
Route::get('/HistoriKlaim2', function () {return view('RT.HistoriKlaim2');});
Route::get('/HistoriPembayaran2', function () {return view('RT.HistoriPembayaran2');});

// Route::get('/Kamus', '\App\Http\Controllers\KamusController@index');
// Route::get('/Fitur', '\App\Http\Controllers\FeaturesController@index');

// Route::get('/Fasilitas', '\App\Http\Controllers\FormlinksController@index');
// Route::get('/Syarat', '\App\Http\Controllers\TypeofklaimsController@index');
Route::get('/Grafik', function () {
    return view('Fasilitas.Grafik');
});
Route::get('/Grafik2', function () {return view('Fasilitas.Grafik2');});
Route::get('/PerubahanAlamat', function () {return view('Fasilitas.PerubahanAlamat');});
Route::get('/UbahAlamat', function () {return view('Fasilitas.UbahAlamat');});
Route::get('/AlamatRiwayat', function () {return view('Fasilitas.AlamatRiwayat');});

Route::get('/TopUp', function () {return view('CPayment.TopUp');});
Route::get('/TopUp2', function () {return view('CPayment.TopUp2');});
Route::get('/Premi', function () {return view('CPayment.Premi');});
Route::get('/PremiCheck', function () {return view('CPayment.PremiCheck');});
Route::get('/PremiCheckSemua', function () {return view('CPayment.PremiCheckSemua');});
Route::get('/PremiLanjutan', function () {return view('CPayment.PremiLanjutan');});

