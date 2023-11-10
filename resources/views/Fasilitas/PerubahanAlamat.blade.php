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
                <a class="nav-link" href="Fasilitas">Formulir</a>
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

                <div class="titleprosedur">
                    <h5>Ubah Alamat</h5>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                        
                                  <div class="form-group col">
                                      <label>Nama</label>
                                      <input class="form-control" type="text" value="Andrian" readonly>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                        
                                  <div class="form-group col">
                                      <label>Nomor Polis</label>
                                      <input class="form-control" type="text" value="000000136651" readonly>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                        
                                  <div class="form-group col">
                                      <label>Tanggal Lahir</label>
                                      <input class="form-control" type="text" value="1990/01/05" readonly>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                        
                                  <div class="form-group col">
                                      <label>Status Polis</label>
                                      <input class="form-control" type="text" value="Inforce" readonly>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                        
                                  <div class="form-group col">
                                      <label class="col-12">Alamat Sekarang <a tabindex="0" role="button" class="btn btn-sm" data-toggle="popover" data-trigger="focus" data-content="Klik tombol 'Ubah' untuk mengubah alamat, tombol 'Riwayat' untuk melihat riwayat perubahan "><i class="far fa-question-circle" style="color: grey"></i></a></label>
                                      
                                      <div class="col-12 mx-auto">
                                        <a class="btn btn-warning" href="UbahAlamat" role="button">Ubah</a>
                                        <a class="btn btn-warning" href="AlamatRiwayat" role="button">Riwayat</a>
                                      </div>
                                  </div>

                                </form>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Koresponden</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Koresponden</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" readonly>
                                    </div>

                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="syarat">
                  <li href="#demo3" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="false">
                        Pembayar Polis
                        <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                        <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                  </li>
                  <div id="demo3" class="collapse PR_Alamat" data-parent="#demo3">
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Rumah</h6>
                            </div>
                            <div class="line"></div>

                              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Rumah</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Bisnis</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Bisnis</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="" readonly>
                                    </div>

                                </form>
                            </div>


                          </div>
                      </div>  


                  </div>
                </div>      

                <div class="syarat">
                  <li href="#demo4" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="false">
                        Pemilik Polis
                        <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                        <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                  </li>
                  <div id="demo4" class="collapse PR_Alamat" data-parent="#demo4">
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Rumah</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Rumah</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Bisnis</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Bisnis</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="" readonly>
                                    </div>

                                </form>
                            </div>


                          </div>
                      </div> 
                  </div>
                </div>    

                <div class="syarat">
                  <li href="#demo5" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="false">
                        Tertanggung Polis
                        <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                        <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                  </li>
                  
                  <div id="demo5" class="collapse PR_Alamat" data-parent="#demo5">
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Rumah</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Rumah</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Bisnis</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                  <div class="form-group col">
                                      <label>Alamat Bisnis</label>
                                      <textarea class="form-control" readonly style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia" readonly>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <form>
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat" readonly>
                                    </div>

                                </form>
                            </div>

                            

                          </div> <!-- Akhir Row -->
                      </div>


                  </div>
                </div>       

              </div>     <!-- Akhir AccordionKamus -->
          
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->

  </div> <!-- Akhir Isi -->
@endsection

@section('JS')
<script>
 
    $(function (){
      $('[data-toggle="popover"]').popover();
    });

</script>

 <script>
     $(function (){
       $('.popover-dismiss').popover({
         trigger: 'focus'
       })
     });
 </script>
@endsection