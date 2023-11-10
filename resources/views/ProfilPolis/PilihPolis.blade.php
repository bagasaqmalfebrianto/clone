@extends('layout.main')

@section('title', 'Profil Polis - Data Personal')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
@include('sweetalert::alert')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
  <!-- Isi profil Polis 1 -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills menuprofil">

            <li class="nav-item ">
              <a class="nav-link" href="ProfilPolis1">Rincian Polis</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="DataPersonal1">Data Personal</a>
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

        <div class="card-body">
              <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Penerima Manfaat
                        <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                        <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <form action="/PilihPolis" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">

                        <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-12 text-center">
                                   <h6 style="font-weight: bolder;">No. Polis : {{ $userData['no_polis']}}</h6>
                              </div>

                                <div class="line"></div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                      <div class="form-group col">
                                          <label>Nama Penerima</label>
                                          <input class="form-control" type="text" name="nama_penerima">
                                      </div>

                                      <div class="form-group col">
                                          <label>Alamat Rumah</label>
                                          <textarea class="form-control" name="alamat" style="height: 125px"></textarea>
                                      </div>


                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                        <div class="form-group col">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="text" name="tanggal_lahir">
                                        </div>

                                        <div class="form-group col">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="text" name="tempat_lahir">
                                        </div>

                                        <div class="form-group col">
                                            <label>Hubungan</label>
                                            <input class="form-control" type="text" name="hubungan">
                                        </div>



                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="form-group col">

                                            <label>Jenis Kelamin</label>
                                            <br>
                                            <select class="form-control" name="jenis_kelamin" id="user_id_select">
                                                <option   value="Laki-Laki">Laki-Laki</option>

                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>



                                        <div class="form-group col">
                                            <label>NIK</label>
                                            <input class="form-control" type="text" name="nik">
                                        </div>

                                        <div class="form-group col">
                                            <label>No KTP</label>
                                            <input class="form-control" type="text" name="no_ktp">
                                        </div>

                                </div>

                                <div class="line"></div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                        <div class="form-group col">
                                            <label>Telepon</label>
                                            <input class="form-control" type="text" name="no_telp">
                                        </div>

                                        <div class="form-group col">
                                            <label>Foto KTP</label>
                                            <input class="form-control" type="file" name="foto_ktp" id="foto_ktp" onchange="previewImage()">
                                            {{-- <input class="form-control" type="file" name="foto_ktp"> --}}
                                        </div>




                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                      <div class="form-group col">
                                          <label>Umur Saat Ini</label>
                                          <input class="form-control" type="text" name="umur">
                                      </div>

                                      <div class="form-group col">
                                        <label>Foto KK</label>
                                        <input class="form-control" type="file" name="foto_kk" id="foto_kk" onchange="previewImagekk()">
                                        <input class="form-control" type="text" name="user_id" value="{{ $userData['no_polis'] }}" hidden>

                                    </div>

                                </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                        <div class="form-group col">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email">
                                        </div>

                                        <div class="form-group col">
                                            <label>Foto  Pribadi</label>
                                            {{-- <input class="form-control" type="file" name="foto_pribadi"> --}}
                                            <input class="form-control" type="file" name="foto_pribadi" id="foto_pribadi" onchange="previewImagepribadi()">
                                        </div>


                                    </div>

                                </div>

                        </div>

                        </div>
                    </div>
                  </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pilih Premi
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

                                            <label>Jenis Asuransi</label>
                                            <br>
                                            <select class="form-control" name="jenis_asuransi" id="user_id_select">
                                                <option   value="Asuransi Jiwa">Asuransi Jiwa</option>

                                                <option value="Asuransi Pendapatan">Asuransi Pendapatan</option>
                                            </select>
                                        </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                        <div class="form-group col">

                                            <label>Periode Pembayaran</label>
                                            <br>
                                            <select class="form-control" name="periode_pembayaran" id="user_id_select">
                                                <option   value="bulan">Bulan</option>

                                                <option value="tahun">Tahun</option>

                                                <option value="18 Bulan">1/2 Tahun</option>
                                            </select>
                                        </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                        <div class="form-group col">

                                            <label>Jumlah Tanggungan</label>
                                            <br>
                                            <select class="form-control" name="jumlah_tanggungan" id="user_id_select">
                                                <option   value="100000">Rp. 100.000,-</option>

                                                <option value="250000">Rp. 250.000,-</option>

                                                <option value="500000">Rp. 500.000,-</option>
                                                <option value="750000">Rp. 750.000,-</option>
                                                <option value="1000000">Rp. 1.000.000,-</option>
                                            </select>
                                        </div>

                                </div>

                                <div class="line"></div>



                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                <!-- Akhir Card 2 -->


                {{-- Card 3 --}}
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

                {{-- Card 3 akhir --}}

              </div>
                <!-- Akhir Accordion -->
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
        <!-- Akhir Card Body -->
      </div>
      <!-- Akhir Card-->

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
