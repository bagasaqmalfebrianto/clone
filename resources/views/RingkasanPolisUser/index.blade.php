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
    <div class="card shadow">

        <h5 class="card-header bg-light" >Ringkasan Polis</h5>
        <div class="card-body">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-3 col-sm-12 my-auto ">
                      <img src="{{ asset('storage/'. $foto_ktp) }}" class="mx-auto img-fluid d-block profilpic" alt="Profil">
                  </div>


                  <div class="col-md mx-auto">
                        @foreach ($data_user as $data)

                        @endforeach

                          <div class="row" id="nama">
                              <div class="col-md-12">
                                <p style="color: black" class="text-center font-weight-bold text-md-left"> {{ $data->nama_lengkap }} | {{ $data->no_polis }}</p>
                              </div>
                          </div>



                          <div class="row">
                              <div class="col-md-6 col-sm-12 col-lg-4" id="email">
                                  <p style="color: black" class="text-center font-weight-bold text-md-left">E-mail : {{ $data->email }}</p>
                                  <p style="color: black" class="text-center font-weight-bold text-md-left">Jenis Kelamin : {{ $data->no_telp }}</p>
                              </div>

                          </div>

                      <div class="col-md text-center">
                          <div class="row cardlac text-center justify-content-center justify-content-md-start ">

                              <div class=" card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                  <div class="col-sm-12 col-md-12">
                                      <b class="card-title">Nomor Loyality Card</b>
                                      <p class="card-text">{{ $data->no_lac }}</p>
                                  </div>

                              </div>

                              <div class="card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                  <div class="col-sm-12 col-md-12">
                                      <b class="card-title">Polis Aktif</b>
                                      <p class="card-text">{{ $jumlahDataProfilPolis[$data->id]}}</p>
                                  </div>
                              </div>

                              <div class="card text-center LC" style="margin-bottom: 1%;margin-right: 1%">
                                  <div class="col-sm-12 col-md-12">
                                      <b class="card-title">Polis Tidak Aktif</b>
                                      <p class="card-text">0</p>
                                  </div>

                              </div>

                          </div>
                      </div>


                  </div>

              </div>

          </div>

        </div>
      </div>
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
                            <th>Penerima Manfaat</th>
                            <th>No Telepon</th>
                            <th>Jenis Asuransi</th>
                            <th>Periode Pembayaran</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Status Polis</th>
                            <th>Detail Polis</th>
                            {{-- <th>Ubah Data</th> --}}
                            <th></th>
                        </tr>
                      </thead>
                      <tbody class="bg-light">
                        @foreach ($data_polis as $data )


                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama_penerima }}</td>
                          <td>{{ $data->no_telp }}</td>
                          <td>{{ $data->jenis_asuransi}}</td>
                          <td>{{ $data->periode_pembayaran }}</td>
                          <td>{{ $data->jumlah_tanggungan }}</td>
                          {{-- <td>{{ $data->jumlah_tanggungan }}</td> --}}
                          <td>
                              <div class="badge badge-success text-body text-wrap" style="width: 6rem;">active</div>
                          </td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#datapolis">Detail</button></td>

                          {{-- <td><a href="RingkasanPolisAdmin/{{ $data->id }}/edit" class="btn btn-warning btn-sm font-weight-bold" >Ubah Data</a></td> --}}
                          {{-- <td><a class="btn btn-warning btn-sm font-weight-bold" role="button" href="{{ url('Pembayaran', ['id' => $data->id]) }}">Bayar</a></td> --}}
                          <td><a class="btn btn-warning btn-sm font-weight-bold" role="button" href="{{url('Pembayaran', ['id' => $data->id]) }}">Bayar</a></td>
                        </tr>
                        @endforeach

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
