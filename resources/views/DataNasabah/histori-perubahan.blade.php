@extends('layout.user')

@section('title', 'Data Nasabah - Histori Perubahan')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="userpolis.css">
@endsection
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills menuprofil">
              
              <li class="nav-item active">
                <a class="nav-link" href="/historiperubahan">Histori Perubahan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tagihanpremi">Tagihan Premi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/historiclaim">Histori Klaim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/historipembayaran">Histori Pembayaran</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
                <div class="accordion" id="accordionExample">

                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <!-- <span class="collapsed"><i class="fa fa-plus"></i></span> 
                          <span class="expanded"><i class="fa fa-minus"></i></span>  -->
                          Histori Perubahan 
                          <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                          <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                          
                          <div class="container">
                              <div class="row">
                                <div class="col-md-12 text-center">
                                    <h6 style="font-weight: bolder;">No. Polis : 000000136651</h6>
                                </div>

                                  <div class="line"></div>

                        <div class="main2">
                            <div class="table-wrapper">
                                    <table class="fl-table">
                                          <thead>
                                          <tr>
                                              <th>Nomer Registrasi</th>
                                              <th>Tipe Perubahan</th>
                                              <th>Tanggal Registrasi</th>
                                              <th>Tanggal Valid</th>
                                              <th>Status Perubahan</th>
                                              <th>Detail</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td>140810200006</td>
                                              <td>Top Up UL</td>
                                              <td>2/12/2023</td>
                                              <td>2/12/2023</td>
                                              <td>Complete</td>
                                              <td>
                                                <a href="#" class="table-button">Detail</a>
                                              </td>
                                          </tr>
                                          <tr>
                                          <td>140810200006</td>
                                              <td>Top Up UL</td>
                                              <td>2/12/2023</td>
                                              <td>2/12/2023</td>
                                              <td>Complete</td>
                                              <td>
                                                <a href="#" class="table-button">Detail</a>
                                              </td>
                                          </tr>
                                          <tbody>
                                      </table>
                                </div>
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