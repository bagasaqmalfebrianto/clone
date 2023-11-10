<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Pagination\Paginator;



class KamusController extends Controller
{
    public function index()
    {
        $kamus = DB::table('dictionaries')->Paginate(10);
        return view('Kamus', ['kamus' => $kamus]);    
    }
    
    
}
