@extends('layout.main')

@section('title', 'Profil Polis - Rincian Unit Link')

@section('css')
    <!-- Custom styles for this template tabel -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('profilpolis.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
  <!-- Isi profil Polis 1 -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills menuprofil">
            
            <li class="nav-item ">
              <a class="nav-link" href="ProfilPolis1">Rincian Polis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="DataPersonal1">Data Personal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="PenerimaManfaat1">Penerima Manfaat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="RincianAgen1">Rincian Agen</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="RincianUnitLink1">Rincian Unit Link</a>
            </li>
            
          </ul>
        </div>

        <div class="card-body">
              <div class="accordion" id="accordionExample">

                <!-- Card 1 -->
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Rincian Unit Link 
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

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                            
                                      <div class="form-group col">
                                          <label>Alokasi Premi Dasar</label>
                                          <input class="form-control" type="text" value="Rp. 10.000.000" readonly>
                                      </div>

                                      <div class="form-group col">
                                          <label>Top Up Reguler</label>
                                          <input class="form-control" type="text" value="Rp. 0" readonly>
                                      </div>

                                      <div class="form-group col">
                                            <label>Total Nilai Investasi</label>
                                            <input class="form-control" type="text" value="Rp. 0" readonly>
                                      </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        
                                        <div class="form-group col">
                                            <label>Cara Bayar</label>
                                            <input class="form-control" type="text" value="Cash" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Modal Premi</label>
                                            <input class="form-control" type="text" value="Rp. 10.000.000" readonly>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        <div class="form-group col">
                                            <label>Status Polis Unit Link</label>
                                            <input class="form-control" type="text" value="Redemption" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Status Cuti Premi</label>
                                            <input class="form-control" type="text" value="Non-Active" readonly>
                                        </div>

                                    </form>
                                </div>

                                <div class="line"></div>

                                <!-- Tabel 1 -->
                                  
                                <div class="table-responsive text-center">
                                  <table class="table-sm table-bordered table-hover" id="Table1" width="100%" cellspacing="0">
                                    <thead class="bg-warning">
                                      <tr>
                                          <th>Nama Jenis Investasi</th>
                                          <th>Persentase (%)</th>
                                      </tr>
                                    </thead>

                                    <tbody class="bg-light">
                                      <tr>
                                        <td>Investra Equity Fund</td>
                                        <td>100</td>
                                      </tr>
                                    </tbody>

                                  </table>
                                </div> <!-- Akhir Tabel 1 -->
                                

                                <div class="line"></div>

                                <!-- Tabel 2 -->
                                  
                                  <div class="table-responsive text-center">
                                    <table class="table-sm table-striped table-bordered table-hover" id="Table2" width="100%" cellspacing="0">
                                      <thead class="bg-warning">
                                        <tr>
                                            <th>Tahun Polis Ke</th>
                                            <th>Asuransi (%)</th>
                                            <th>Investasi (%)</th>
                                        </tr>
                                      </thead>

                                      <tbody class="bg-light">
                                        <tr>
                                          <td>1</td>
                                          <td>100</td>
                                          <td>0</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>60</td>
                                          <td>40</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>15</td>
                                          <td>85</td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>15</td>
                                          <td>85</td>
                                        </tr>
                                        <tr>
                                          <td>5</td>
                                          <td>15</td>
                                          <td>85</td>
                                        </tr>
                                        <tr>
                                          <td>6</td>
                                          <td>0</td>
                                          <td>100</td>
                                        </tr>
                                      </tbody>

                                    </table>
                                  </div> <!-- Akhir Tabel 2 -->

                                  <div class="line"></div>

                                  <!-- Tabel 3 -->
                                  
                                <div class="table-responsive ">
                                  <table class="table-sm table-striped text-center table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-warning">
                                      <tr>
                                          <th>Tanggal Transaksi Dari</th>
                                          <th>Tanggal Transaksi Sampai</th>
                                          <th></th>
                                      </tr>
                                    </thead>

                                    <tbody class="bg-light">
                                      <tr>
                                        <td>26/09/2018</td>
                                        <td>28/11/2018</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>26/06/2018</td>
                                        <td>26/09/2018</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>26/03/2018</td>
                                        <td>26/06/2018</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>02/07/2017</td>
                                        <td>26/09/2017</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>26/03/2017</td>
                                        <td>02/07/2017</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>27/09/2015</td>
                                        <td>27/12/2015</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>28/06/2015</td>
                                        <td>27/09/2015</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>01/08/2012</td>
                                        <td>01/11/2012</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>01/02/2012</td>
                                        <td>01/05/2012</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>01/08/2011</td>
                                        <td>01/11/2011</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                      <tr>
                                        <td>28/08/2010</td>
                                        <td>28/09/2010</td>
                                        <td><a type="button" class="btn btn-warning btn-sm" href="https://tinyurl.com/y7dldhfa">Cetak</a></td>
                                      </tr>
                                    </tbody>

                                  </table>
                                </div> <!-- Akhir Tabel 3 -->

                                <div class="col-md-12">
                                    <form>
                                        <div class="text-left">
                                            <h6 style="padding-top: 3%;padding-left: 1.5%">CATATAN: Mulai Desember 2019, Tabel LPT di atas akan Tidak Aktif.</h6>
                                        </div>

                                    </form>
                                </div>

                                <div class="container-fluid">
                                  
                                  <div class="row">
                                      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                          <form>
                                              <div class="form-group col">
                                                  <label >Pilih Jenis Pernyataan Transaksi:</label>
                                                  <div class="filter-dropdown dropdown">
                                                    <button class="btn btn-light btn-block dropdown-toggle" type="button" style="box-shadow: none !important; color: grey; text-align: left; font-weight: normal;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Pilih
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="RincianUnitLink1">Pilih</a>
                                                      <a class="dropdown-item" data-toggle="modal" data-target="#ModalLPTBaru">LPT Polis Baru</a>
                                                      <a class="dropdown-item" href="RincianUnitLink1_2#tanggaldate">LPT Bulanan</a>
                                                    </div>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                </div>

                            </div>
                        </div> <!-- Akhir Container -->

                    </div> <!-- Akhir card body -->
                  </div>
                </div> <!-- Akhir Card 1 -->



              </div>
                <!-- Akhir Accordion -->
        </div>
        <!-- Akhir Card Body -->
      </div> 
      <!-- Akhir Card-->
  
</div>
<!-- Akhir Isi -->
<!-- Modal -->
<div class="modal fade" id="ModalLPTBaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Service.commlife.co.id menyatakan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Data tidak ditemukan
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
@endsection

@section('JS')
    <!-- Bootstrap core JavaScript-->
        <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
@endsection