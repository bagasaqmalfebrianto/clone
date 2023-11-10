@extends('layout.main')

@section('title', 'Fasilitas - Perubahan Alamat')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
      <!-- Isi profil Polis 1 -->
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills menuprofil">
                
                <li class="nav-item">
                  <a class="nav-link" href="Formulir">Formulir</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Syarat">Syarat Perubahan & Prosedur Klaim</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="PerubahanAlamat">Perubahan Alamat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Grafik">Grafik Investra</a>
                </li>
                
              </ul>
            </div>

            <div class="card-body">
                
                <div id="accordionKamus" class="mx-auto">                  

                  <div class="syarat">
                    <li href="#demo3" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="false">
                          Histori Ubah Alamat 
                          <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                          <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                    </li>
                    <div id="demo3" class="collapse PR_Alamat" data-parent="#demo3">
                        <p>
                          Data Tidak Ditemukan 
                            
                        </p>


                    </div>
                  </div>                                          

                </div>     <!-- Akhir AccordionKamus -->
            
            </div> <!-- Akhir Card Body -->
            
          </div>  <!-- Akhir Card-->

    </div> <!-- Akhir Isi -->
@endsection