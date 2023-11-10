<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>



    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/profilpolis.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

     <!-- Custom styles for this page -->


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">


</head>
<body>
    <div class="wrappermenu">
        <!-- Sidebar  -->
        <nav id="sidebar" class="menu1">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header" style="background-color: #f7ba02">
                <img src="../../images/logo.png" style="width: 170px">
            </div>

            <ul class="list-unstyled componentsmenu">
            @can('polis')

            <li class="">
                <a href="RingkasanPolisUser" class="text-black">Ringkasan Polis</a>
            </li>


            <li>
                <a href="#paymentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">COMM Payment</a>
                <ul class="collapse list-unstyled" id="paymentSubmenu">
                    <li class="sub">
                        <a href="TopUp">Top Up Single</a>
                    </li>
                    <li class="sub">
                        <a href="Premi">Premi Lanjutan</a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('admin')

            <li class="">
                <a href="/RingkasanPolisAdmin" class="text-black">Ringkasan Polis</a>
            </li>
            <li>
                <a href="/TambahPengguna">Tambah Pengguna</a>
            </li>
            @endcan
                {{-- <li>
                    <a href="#profilSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profil Polis</a>
                    <ul class="collapse list-unstyled" id="profilSubmenu">
                        <li class="sub">
                            <a href="ProfilPolis1">000000136651 - Andrian</a>
                        </li>
                        <li class="sub">
                            <a href="ProfilPolis2">000000193121 - Rossy Rahmawati</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#rincianSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rincian Transaksi</a>
                    <ul class="collapse list-unstyled" id="rincianSubmenu">
                        <li class="sub">
                            <a href="HistoriPerubahan1">000000136651 - Andrian</a>
                        </li>
                        <li class="sub">
                            <a href="HistoriPerubahan2">000000193121 - Rossy Rahmawati</a>
                        </li>
                    </ul>
                </li> --}}



                {{-- <li>
                    <a href="Fitur">Fitur</a>
                </li>
                <li>
                    <a href="Kamus">Kamus</a>
                </li> --}}
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <!-- navbar atas -->
            <nav class="navbar navbar-expand navbar-light bg-light">

                    <button type="button" id="sidebarCollapse" class="btn btn-dark" style="font-size: 13px;">
                        <i class="fas fa-bars"></i> Menu
                        <span></span>
                    </button>

                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item dropdown filter-dropdown no-arrow my-auto menu2">
                                <a href="#" style="border-style: none;" class="btn nav-link" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="fas fa-envelope-open" style="color: grey;"></i>
                                    <span class="mr-2 d-lg-inline text-gray-600 small"> Pesan</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <button class="dropdown-item akun" data-toggle="modal" data-target="#Pesan">
                                        <i class="far fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Tulis Pesan
                                    </button>

                                    <a class="dropdown-item akun" href="#" data-toggle="modal" data-target="#PesanMasuk">
                                        <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Kotak Masuk
                                    </a>
                                </div>
                            </li>


                            <div class="line_verikal my-auto"></div>

                            <li class="nav-item dropdown filter-dropdown no-arrow menu2">
                                <a href="#" style="border-style: none;" class="btn nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Andrian</span>
                                    <img class="img-profile rounded-circle" src="img/profile.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <button class="dropdown-item akun" data-toggle="modal" data-target="#ubahPassword">
                                        <i class="fas fa-unlock fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Ubah Pasword
                                    </button>
                                    <div class="dropdown-divider"></div>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item akun" >
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </li>

                        </ul>
            </nav>
            <!-- akhir navbar atas -->

        </div>


    </div>

{{-- ISI --}}

<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills menuprofil">
              <li class="nav-item active">
                <a class="nav-link" href="/RingkasanPolisAdmin">Dashboard</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#" disabled>Pilih Polis</a>
              </li> --}}
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
          <form action="/RingkasanPolisAdmin/{{ $data_user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                    <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">

                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ubah Data Nasabah
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
                                                                <input class="form-control" type="text" name="no_rek" value="{{ old('no_rek',$data_user->no_rek) }}">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Mata Uang</label>
                                                                <input class="form-control" type="text" value="Rupiah" readonly>
                                                            </div>

                                        <div class="form-group col">
                                                                <label>Nama Lengkap</label>
                                                                <input class="form-control" type="text" name="nama_lengkap" value="{{ old('nama_lengkap',$data_user->nama_lengkap) }}">
                                                            </div>


                                    </div>

                                    {{-- HIDDEN POLIS AND LAC --}}
                                    <input type="hidden" name="no_polis" value="nilai_no_polis">
<input type="hidden" name="no_lac" value="nilai_no_lac">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Nama Ibu Kandung</label>
                                                                <input class="form-control" type="text" name="nama_ibu" value="{{ old('nama_ibu',$data_user->nama_ibu) }}">
                                                            </div>
                                                            <div class="form-group col">
                                                                <label>NIK</label>
                                                                <input class="form-control" type="text" name="nik" value="{{ old('nik',$data_user->nik) }}">
                                                            </div>

                                                                <div class="form-group col">
                                                                <label>Tempat Lahir</label>
                                                                <input class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir',$data_user->tempat_lahir) }}">
                                                            </div>


                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Tanggal Lahir</label>
                                                                <input class="form-control" type="text" name="tanggal_lahir" value="{{ old('tanggal_lahir',$data_user->tanggal_lahir) }}">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Alamat Korespondensi</label>
                                                                <textarea class="form-control" style="height: 125px" name="alamat" >{{ old('alamat',$data_user->alamat) }}</textarea>
                                                            </div>



                                    </div>

                                    <div class="line"></div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Telepon</label>
                                                                <input class="form-control" type="text" name="no_telp" value="{{ old('no_telp',$data_user->no_telp) }}">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Telepon lain</label>
                                                                <input class="form-control" type="text" name="no_telp2" value="{{ old('no_telp2',$data_user->no_telp2) }}">
                                                            </div>


                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                                <div class="form-group col">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text" name="email" value="{{ old('email',$data_user->email) }}">
                                                            </div>

                                                            <div class="form-group col">
                                                                <label>Email lain</label>
                                                                <input class="form-control" type="text" name="email2" value="{{ old('email2',$data_user->email2) }}">
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
                                            <input type="hidden" name="oldImage" value="{{ $data_user->foto_ktp }}">
                                            @if($data_user->foto_ktp)
                                                <img src="{{ asset('storage/'. $data_user->foto_ktp) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

                                            @else
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                            @endif
                                            <input type="file"  value="{{ $data_user->foto_ktp }}" id="foto_ktp" name="foto_ktp" onchange="previewImage()">
                                            {{-- <input class="form-control" type="file" name="foto_ktp" id="foto_ktp" value="{{ $data_user->foto_ktp }}"> --}}
                                        </div>

                                    </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>FOTO KK</label>
                                        <input type="hidden" name="oldImage_kk" value="{{ $data_user->foto_kk }}">
                                        @if($data_user->foto_kk)
                                                <img src="{{ asset('storage/'. $data_user->foto_kk) }}" class="img-preview-kk img-fluid mb-3 col-sm-5 d-block">

                                            @else
                                                <img class="img-preview-kk img-fluid mb-3 col-sm-5">
                                            @endif
                                            <input type="file" value="{{ $data_user->foto_kk }}" id="foto_kk" name="foto_kk" onchange="previewImagekk()">
                                    </div>


                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">


                                    <div class="form-group col">
                                        <label>Foto Pribadi</label>
                                        <input type="hidden" name="oldImage_pribadi" value="{{ $data_user->foto_pribadi }}">
                                        @if($data_user->foto_pribadi)
                                                <img src="{{ asset('storage/'. $data_user->foto_pribadi) }}" class="img-preview-pribadi img-fluid mb-3 col-sm-5 d-block">

                                            @else
                                                <img class="img-preview-pribadi img-fluid mb-3 col-sm-5">
                                            @endif
                                            <input type="file"  value="{{ $data_user->foto_pribadi }}" id="foto_pribadi" name="foto_pribadi" onchange="previewImagepribadi()">
                                    </div>


                                </div>

                                </div>

                            </div>
                        </div>
                        </div>

                    </div>
                    <!-- Akhir Card 3 -->
                    </div>
                    <!-- Akhir Accordion -->
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
          <!-- Akhir Card Body -->
        </div>
</div>

          <!-- Modal -->
       <!-- Modal Ubah Password -->
      <!-- The Modal -->
      <div class="modal fade" id="ubahPassword">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-unlock"></i> Ubah Password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form onsubmit="openModal()" id="FormPass">
              <!-- Modal body -->
              <div class="modal-body">
                      <div class="col-12">
                          <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) wajib diisi</p>
                      </div>

                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">Password Lama</label>
                          <div class="col-sm-6">
                            <input type="password" class="form-control" id="passbaru" minlength="7" maxlength="20" aria-describedby="passwordHelpInline" required>
                            <small id="passwordHelpInline" class="text-muted my-auto">
                            Must be 7-20 characters long.
                            </small>

                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">Password Baru</label>
                          <div class="col-sm-6">
                            <input type="password" class="form-control" id="passbaru1" minlength="7" maxlength="20" aria-describedby="passwordHelpInline" required>
                            <small id="passwordHelpInline" class="text-muted my-auto">
                            Must be 7-20 characters long.
                          </small>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                          <div class="col-sm-6">
                            <input type="password" class="form-control" id="passbaru2" minlength="7" maxlength="20" aria-describedby="passwordHelpInline" required>
                            <small id="passwordHelpInline" class="text-muted my-auto">
                            Must be 7-20 characters long.
                          </small>
                          </div>
                      </div>
                      <input type=button class="btn btn-sm btn-warning" id="show" style="float: right;" value="Show Password" onclick="ShowPassword()">
                      <input type=button class="btn btn-sm btn-warning" style="display:none; float: right;" id="hide" value="Hide Password" onclick="HidePassword()">
                      <br>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Ubah</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit" style="margin: 15px;float: left;">Ubah</button>
              </div>

              </form>
            </div>
          </div>
      </div>

      <!-- Modal Alert Password -->
        <div class="modal fade" tabindex="-1" id="PassBerhasil" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-unlock"></i> Perubahan dalam Proses</h4>
                </div>
                <div class="modal-body">
                      <div class="progress pass5">
                          <div class="progress-bar passprog bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                      </div>

                      <div class="alert alertpass alert-success" role="alert">Perubahan Password Berhasil! <a href="" data-dismiss="modal" class="alert-link">Klik untuk menutup</a></div>
                </div>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

      <!-- Modal Pesan -->
      <div class="modal fade" id="Pesan">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-envelope-open" style="color: grey"></i> Pesan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form onsubmit="openModal()" id="FormPesan">
              <!-- Modal body -->
              <div class="modal-body">

                  <div class="col-12">
                      <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) wajib diisi</p>
                  </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><i class="fas fa-user"></i> Kepada:</label>
                      <input type="text" class="form-control" value="commcenter@commlife.co.id" id="recipient-name" readonly>
                    </div>

                    <div class="form-group">
                      <label for="Judul-pesan" class="col-form-label"><i class="fas fa-heading"></i> Judul</label>
                      <input type="text" class="form-control" id="judulpesan" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <label for="SelectPolis"><i class="fas fa-list-ol"></i> No Polis</label>
                        <select id="SelectPolis" class="form-control">
                          <option value="">Select One - Optional</option>
                          <option value="1">000000136651 - Andrian</option>
                          <option value="2">000000193121 - Rossy Rahmawati</option>
                        </select>

                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><i class="far fa-edit"></i> Message:</label>
                      <textarea class="form-control" required id="message-text"></textarea>
                    </div>

                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="fileInput" multiple onchange="showname()">
                      <label class="custom-file-label" id="filename" for="fileInput"></label>
                  </div>

              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Ubah</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit" style="margin: 15px;float: left;">Kirim</button>
              </div>

              </form>
            </div>
          </div>
      </div>
        <!-- Akhir Modal -->

        <!-- Modal Kotak Masuk -->
      <div class="modal fade" id="PesanMasuk">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-envelope-open" style="color: grey"></i> Pesan Masuk</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form onsubmit="openModal()" id="FormKotakMasuk">
              <!-- Modal body -->
              <div class="modal-body">
                  <div class="inbox">
                    <li href="#demo3" class="list-group-item bg-light" data-toggle="collapse">
                          <div class="media" style="height: 35px;">
                              <div class="pull-left">

                                  <div class="thumb hidden-sm-down m-r-20" style="padding: 10px;"> <i class="fas fa-envelope text-gray-400" style="width: 20px;height: 20px;"></i> </div>
                              </div>
                              <div class="media-body">
                                  <div class="media-heading">
                                      <a class="m-r-10">Commonwealth Life</a>
                                      <span class="badge badge-pill badge-success">Password</span>
                                      <small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                  </div>
                                  <p class="msg" style="font-size: 13px;">Password Akun Commonwealth Life telah direset.</p>
                              </div>
                          </div>
                    </li>
                    <div id="demo3" class="collapse isi" style="color: black;">
                        <p><span style="font-weight: bold">Commonwealth Life</span> 'donotreply@commlife.co.id' <span style="font-size: 10px; float: right;">Mar 14, 2020, 12:35 AM <i class="fas fa-inbox"></i></span> </p>
                        <p>
                          Kepada Yth,<br>Bapak Andrian <br><br>
                          Anda telah mengirimkan data Lupa Password pada layanan Customer e-Services. <br>
                          Silakan Login menggunakan informasi berikut : <br><br>

                          Alamat Portal Website : <a href="index.html" class="text-primary" style="text-decoration: underline;">https://services.commlife.co.id/customer/</a>
                          <br>
                          Username : andrian123 <br>
                          Password : 1234567 <br><br>
                          Hormat kami, <br>
                          Customer e-Services

                        </p>
                    </div>

                  </div>

                  <div class="inbox">
                    <li href="#demo4" class="list-group-item bg-light" data-toggle="collapse">

                          <div class="media" style="height: 35px;">
                              <div class="pull-left">

                                  <div class="thumb hidden-sm-down m-r-20" style="padding: 10px;"> <i class="fas fa-envelope text-gray-400" style="width: 20px;height: 20px;"></i> </div>
                              </div>
                              <div class="media-body">
                                  <div class="media-heading">
                                      <a class="m-r-10">Commonwealth Life</a>
                                      <span class="badge badge-pill badge-primary">News</span>
                                      <small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">Mar 5</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                  </div>
                                  <p class="msg" style="font-size: 13px;">Yuk Pahami Apa Itu New Normal</p>
                              </div>
                          </div>

                    </li>
                    <div id="demo4" class="collapse isi">
                        <p><span style="font-weight: bold">Commonwealth Life</span> 'donotreply@commlife.co.id' <span style="font-size: 10px; float: right;">Mar 5, 2020, 10:25 AM <i class="fas fa-inbox"></i></span> </p>
                        <p>
                          Kepada Nasabah Yth,<br>
                          <img src="news.jpg" class="img-fluid d-block"> <br><br>

                          Informasi Polis Anda dapat diakses melalui layanan Customer e-Services <a href="RingkasanPolis.html" class="text-primary" style="text-decoration: underline;">https://services.commlife.co.id/customer/</a>

                        </p>
                    </div>

                  </div>

              </div>

              </form>
            </div>
          </div>
      </div>
        <!-- Akhir Modal -->

        <!-- Modal Alert Pesan Berhasil -->
        <div class="modal fade" tabindex="-1" id="PesanBerhasil" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-envelope-open" style="color: grey"></i> Pengiriman Pesan dalam Proses</h4>
                </div>
                <div class="modal-body">
                      <div class="progress progress-pesan">
                          <div class="progress-bar bar-pesan bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                      </div>

                      <div class="alert alert-pesan alert-success" role="alert">Pengiriman Pesan Berhasil! <a href="" data-dismiss="modal" class="alert-link">Klik untuk menutup</a></div>
                </div>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      <!-- Modal -->

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
            const imgPreview = document.querySelector('.img-preview-kk');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
              imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImagepribadi(){
            const image = document.querySelector('#foto_pribadi');
            const imgPreview = document.querySelector('.img-preview-pribadi');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
              imgPreview.src = oFREvent.target.result;
            }
        }
            </script>


  <div class="overlay"></div>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

      @yield('JS')
      <script src="../../js/js1.js"></script>
</body>
</html>




