@extends('layout.main')

@section('title', 'Ringkasan Polis')

@section('css')
    <!-- Custom styles for this template tabel -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/rpolis.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi Ringkasan Polis 1 -->
    
    <div class="card shadow">
      <h5 class="card-header bg-light" >Ringkasan Polis</h5>
      <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 my-auto ">
                    <img src="img/profile.png" class="mx-auto img-fluid d-block profilpic" alt="Profil">
                </div>


                <div class="col-md mx-auto">


                        <div class="row" id="nama">
                            <div class="col-md-12">
                              <p style="color: black" class="text-center font-weight-bold text-md-left"> Andrian | 000000136651</p>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-4" id="email">
                                <p style="color: black" class="text-center font-weight-bold text-md-left">E-mail : andrian@gmail.com</p>
                                <p style="color: black" class="text-center font-weight-bold text-md-left">Jenis Kelamin : Laki - Laki</p>
                            </div>

                        </div>

                    <div class="col-md text-center">
                        <div class="row cardlac text-center justify-content-center justify-content-md-start ">

                            <div class=" card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                <div class="col-sm-12 col-md-12">
                                    <b class="card-title">Nomor Loyality Card</b>
                                    <p class="card-text">082067300033411</p>
                                </div>

                            </div>

                            <div class="card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                <div class="col-sm-12 col-md-12">
                                    <b class="card-title">Polis Aktif</b>
                                    <p class="card-text">1</p>
                                </div>
                            </div>

                            <div class="card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                <div class="col-sm-12 col-md-12">
                                    <b class="card-title">Polis Tidak Aktif</b>
                                    <p class="card-text">1</p>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>

      </div>
    </div>
    <!--Akhir Isi Ringkasan Polis 1 -->
    </div>

    <!-- Tabel Data Polis -->
    <div class="line"></div>

    <div id="page-top">
        <div id="wrapper">
            <div class="container-fluid">
                          <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h5 class="m-0" style="color: black;font-weight: bold;">Data Polis</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table-sm table-bordered table-striped text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-warning">
                        <tr>
                            <th>No.</th>
                            <th>Nomor Polis</th>
                            <th>Produk</th>
                            <th>Jatuh Tempo</th>
                            <th>Jumlah Premi</th>
                            <th>Status Polis</th>
                            <th>Detail Polis</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody class="bg-light">
                        <tr>
                          <td>1</td>
                          <td>000000136651</td>
                          <td>INVESTRA LINK</td>
                          <td>2020/07/20</td>
                          <td>RP. 4.500.000,00</td>
                          <td>
                              <div class="badge badge-success text-body text-wrap" style="width: 6rem;">active</div>
                          </td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#datapolis">Detail</button></td>
                          <td><a class="btn btn-warning btn-sm font-weight-bold" role="button" href="Premi">Bayar</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>000000262354</td>
                          <td>INVESTRA LINK EXTRA</td>
                          <td>2019/05/01</td>
                          <td>RP. 6.500.000,00</td>
                          <td>
                            <div class="badge badge-danger text-body text-wrap" style="width: 6rem;">Inactive</div>
                          </td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#datapolis">Detail</button></td>
                          <td><button class="btn btn-warning btn-sm font-weight-bold" role="button" href="" disabled>Bayar</button></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

        </div>
    </div>
@endsection

@section('JS')
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
