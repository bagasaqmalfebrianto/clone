@extends('layout.main')

@section('title', 'Profil Polis - Rincian Polis')

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
              <li class="nav-item active">
                <a class="nav-link" href="ProfilPolis1">Tambah Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" disabled>Pilih Polis</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="PenerimaManfaat1">Penerima Manfaat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RincianAgen1">Rincian Agen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RincianUnitLink1">Rincian Unit Link</a>
              </li> --}}
            </ul>
          </div>
          <form action="/TambahPengguna" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">

                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hi Admin!
                                <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                                <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                            <div class="container-fluid">
                                <div class="row">

                                <div class="col-md-12 text-center">
                                    <h6 style="font-weight: bolder;">SELAMAT DATANG</h6>
                                </div>

                                <div class="line"></div>


                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                                <div class="form-group col">
                                                                <label>No Rekening</label>
                                                                <input class="form-control" type="text" name="no_rek">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Mata Uang</label>
                                                                <input class="form-control" type="text" value="Rupiah" readonly>
                                                            </div>

                                        <div class="form-group col">
                                                                <label>Nama Lengkap</label>
                                                                <input class="form-control" type="text" name="nama_lengkap">
                                                            </div>


                                    </div>

                                    {{-- HIDDEN POLIS AND LAC --}}
                                    <input type="hidden" name="no_polis" value="nilai_no_polis">
<input type="hidden" name="no_lac" value="nilai_no_lac">

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Nama Ibu Kandung</label>
                                                                <input class="form-control" type="text" name="nama_ibu">
                                                            </div>
                                                            <div class="form-group col">
                                                                <label>NIK</label>
                                                                <input class="form-control" type="text" name="nik">
                                                            </div>

                                                                <div class="form-group col">
                                                                <label>Tempat Lahir</label>
                                                                <input class="form-control" type="text" name="tempat_lahir">
                                                            </div>


                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Tanggal Lahir</label>
                                                                <input class="form-control" type="text" name="tanggal_lahir">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Alamat Korespondensi</label>
                                                                <textarea class="form-control" style="height: 125px" name="alamat"></textarea>
                                                            </div>



                                    </div>

                                    <div class="line"></div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Telepon</label>
                                                                <input class="form-control" type="text" name="no_telp">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Telepon lain</label>
                                                                <input class="form-control" type="text" name="no_telp2">
                                                            </div>


                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text" name="email" readonly>
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Email lain</label>
                                                                <input class="form-control" type="text" name="email2">
                                                            </div>


                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Ops</label>
                                                                <input class="form-control" type="text" value="-" readonly>
                                                            </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                        </div>
                    </div>


                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Ringkasan
                            <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                            <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                                <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="form-group col">
                                            <label>Foto KTP</label>
                                            {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
                                            <input class="form-control" type="file" name="foto_ktp" id="foto_ktp" onchange="previewImage()">
                                        </div>

                                    </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>FOTO KK</label>
                                        {{-- <img class="img-previewkk img-fluid mb-3 col-sm-5"> --}}
                                        <input class="form-control" type="file" name="foto_kk" type="file" id="foto_kk" onchange="previewImagekk()">
                                    </div>


                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                    <div class="form-group col">
                                        <label>Foto Pribadi</label>
                                        {{-- <img class="img-previewpribadi img-fluid mb-3 col-sm-5"> --}}
                                        <input class="form-control" type="file" name="foto_pribadi" id="foto_pribadi" onchange="previewImagepribadi()">
                                    </div>


                                </div>

                                </div>

                            </div>
                        </div>
                        </div>

                    </div>
                    <!-- Akhir Card 3 -->


                    {{-- Awal Card 4 --}}
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Tampilkan Foto
                              <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                              <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="form-group col">
                                            <label>Foto KTP</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            {{-- <input class="form-control" type="file" name="foto_ktp" id="foto_ktp" onchange="previewImage()"> --}}
                                        </div>

                                    </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>FOTO KK</label>
                                        <img class="img-previewkk img-fluid mb-3 col-sm-5">
                                        {{-- <input class="form-control" type="file" name="foto_kk" type="file" id="foto_kk" onchange="previewImagekk()"> --}}
                                    </div>


                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                    <div class="form-group col">
                                        <label>Foto Pribadi</label>
                                        <img class="img-previewpribadi img-fluid mb-3 col-sm-5">
                                        {{-- <input class="form-control" type="file" name="foto_pribadi" id="foto_pribadi" onchange="previewImagepribadi()"> --}}
                                    </div>


                                </div>

                                </div>

                            </div>
                        </div>
                      </div>


                    </div>
                    <!-- Akhir Accordion -->
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
          <!-- Akhir Card Body -->
        </div>
        <!-- Akhir Card-->
    <div class="line"></div>
    <!--Akhir Isi Ringkasan Polis 1 -->

    <!-- Tabel Data Polis -->

</div>

<script>

    function previewImage(){
        const image = document.querySelector('#foto_ktp');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagekk(){
        const image = document.querySelector('#foto_kk');
        const imgPreview = document.querySelector('.img-previewkk');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagepribadi(){
        const image = document.querySelector('#foto_pribadi');
        const imgPreview = document.querySelector('.img-previewpribadi');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>


@endsection

@section('JS')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
