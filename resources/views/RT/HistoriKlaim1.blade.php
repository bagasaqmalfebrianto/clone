@extends('layout.main')

@section('title', 'Ringkasan Transaksi - History Klaim')

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
                  <a class="nav-link" href="HistoriPerubahan1">Histori Perubahan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="TagihanPremi1">Tagihan Premi</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="HistoriKlaim1">Histori klaim</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="HistoriPembayaran1">Histori Pembayaran</a>
                </li>
                
              </ul>
            </div>

            <div class="card-body">
                  <div class="accordion" id="accordionExample">

                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Histori Klaim 
                            <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                            <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            
                            <div class="container">
                                <div class="row">
                                  <div class="col-md text-center">
                                    <h6 style="padding: 1%">Data untuk klaim yang dipilih tidak tersedia</h6>
                                      
                                  </div>
                                    

                                </div>
                            </div> <!-- Akhir Container -->

                        </div> <!-- Akhir card body -->
                      </div>
                    </div>

                  </div>
                    <!-- Akhir Accordion -->
            </div>
            <!-- Akhir Card Body -->
          </div> 
          <!-- Akhir Card-->
      
  </div>
  <!-- Akhir Isi -->
@endsection