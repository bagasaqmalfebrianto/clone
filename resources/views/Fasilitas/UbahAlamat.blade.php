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
                <form action="PerubahanAlamat">

                <div class="titleprosedur">
                    <h5>Ubah Alamat</h5>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        
                                  <div class="form-group col">
                                      <label>Nama</label>
                                      <input class="form-control" type="text" value="Andrian" readonly>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        
                                  <div class="form-group col">
                                      <label>Nomor Polis</label>
                                      <input class="form-control" type="text" value="000000136651" readonly>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        
                                  <div class="form-group col">
                                      <label>Tanggal Lahir</label>
                                      <input class="form-control" type="text" value="1990/01/05" readonly>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        
                                  <div class="form-group col">
                                      <label>Status Polis</label>
                                      <input class="form-control" type="text" value="Inforce" readonly>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        
                                  <div class="form-group col">
                                      <label class="col-12">Alamat Sekarang <a tabindex="0" role="button" class="btn btn-sm" data-toggle="popover" data-trigger="focus" data-content="Klik tombol 'Ubah' untuk mengubah alamat, tombol 'Riwayat' untuk melihat riwayat perubahan "><i class="far fa-question-circle" style="color: grey"></i></a></label>
                                      
                                      <div class="col-12 mx-auto">
                                        <a class="btn btn-warning" href="AlamatRiwayat" role="button">Riwayat</a>
                                      </div>
                                  </div>

                            </div>
                            <div class="col-12">
                                <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) wajib diisi</p>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Koresponden</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                  <div class="form-group col">
                                      <label>Alamat Koresponden (*)</label>
                                      <textarea class="form-control" required style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                

                                    <div class="form-group col">
                                        <label>Negara (*)</label>
                                        <input class="form-control" type="text" value="Indonesia" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi (*)</label>
                                        <input class="form-control" type="text" value="BANTEN" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                
                                    <div class="form-group col">
                                        <label>Kota (*)</label>
                                        <input class="form-control" type="text" value="Ciputat" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos (*)</label>
                                        <input class="form-control" type="text" value="13420" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                
                                    <div class="form-group col">
                                        <label>Telepon (*)</label>
                                        <input class="form-control" type="text" value="021 - 7803210" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP (*)</label>
                                        <input class="form-control" type="text" value="082137726530" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Alamat Email (*)</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" required>
                                    </div>
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
                  <div id="demo3" class="collapse PR_Alamat" data-parent="">
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Rumah</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                  <div class="form-group col">
                                      <label>Alamat Rumah (*)</label>
                                      <textarea class="form-control" required style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                

                                    <div class="form-group col">
                                        <label>Negara (*)</label>
                                        <input class="form-control" type="text" value="Indonesia" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi (*)</label>
                                        <input class="form-control" type="text" value="BANTEN" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                
                                    <div class="form-group col">
                                        <label>Kota (*)</label>
                                        <input class="form-control" type="text" value="Ciputat" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos (*)</label>
                                        <input class="form-control" type="text" value="13420" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                
                                    <div class="form-group col">
                                        <label>Telepon (*)</label>
                                        <input class="form-control" type="text" value="021 - 7803210" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP (*)</label>
                                        <input class="form-control" type="text" value="082137726530" required>
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text"  value="">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

                                
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Alamat Email (*)</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" required>
                                    </div>
                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Kantor</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                  <div class="form-group col">
                                      <label>Alamat Kantor</label>
                                      <textarea class="form-control" style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia">
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat">
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210">
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

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

                                  <div class="form-group col">
                                      <label>Alamat Rumah (*)</label>
                                      <textarea class="form-control" required style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Negara (*)</label>
                                        <input class="form-control" type="text" value="Indonesia" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi (*)</label>
                                        <input class="form-control" type="text" value="BANTEN" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Kota (*)</label>
                                        <input class="form-control" type="text" value="Ciputat" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos (*)</label>
                                        <input class="form-control" type="text" value="13420" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Telepon (*)</label>
                                        <input class="form-control" type="text" value="021 - 7803210" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP (*)</label>
                                        <input class="form-control" type="text" value="082137726530" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Alamat Email (*)</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" required>
                                    </div>

                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Kantor</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                  <div class="form-group col">
                                      <label>Alamat Kantor</label>
                                      <textarea class="form-control" style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia">
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat">
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210">
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

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

                                  <div class="form-group col">
                                      <label>Alamat Rumah (*)</label>
                                      <textarea class="form-control" required style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Negara (*)</label>
                                        <input class="form-control" type="text" value="Indonesia" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi (*)</label>
                                        <input class="form-control" type="text" value="BANTEN" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Kota (*)</label>
                                        <input class="form-control" type="text" value="Ciputat" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos (*)</label>
                                        <input class="form-control" type="text" value="13420" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Telepon (*)</label>
                                        <input class="form-control" type="text" value="021 - 7803210" required>
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP (*)</label>
                                        <input class="form-control" type="text" value="082137726530" required>
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Alamat Email (*)</label>
                                        <input class="form-control" type="text" value="andrian@gmail.com" required>
                                    </div>

                            </div>

                            <div class="line"></div>
                            <div class="col-md-12 text-center">
                                <h6 style="font-weight: bolder;">Alamat Bisnis</h6>
                            </div>
                            <div class="line"></div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                  <div class="form-group col">
                                      <label>Alamat Bisnis</label>
                                      <textarea class="form-control"  style="height: 125px">KOMP. MANDIRI BLOK II NO. 5 RT 005 RW 004 KEC. CIPUTAT TANGGERANG</textarea>
                                  </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Negara</label>
                                        <input class="form-control" type="text" value="Indonesia">
                                    </div>

                                    <div class="form-group col">
                                        <label>Provinsi</label>
                                        <input class="form-control" type="text" value="BANTEN">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" value="Ciputat">
                                    </div>

                                    <div class="form-group col">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="text" value="13420">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="form-group col">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text" value="021 - 7803210">
                                    </div>

                                    <div class="form-group col">
                                        <label>No HP</label>
                                        <input class="form-control" type="text" value="082137726530">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Pin. BB</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                                    <div class="form-group col">
                                        <label>No Fax</label>
                                        <input class="form-control" type="text" value="-">
                                    </div>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                                    <div class="form-group col">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" value="">
                                    </div>

                            </div>


                          </div>
                      </div> 
                  </div>
                </div>    
                
                <button class="btn btn-warning" type="submit" value="Submit" style="margin: 15px;float: right;">Ubah</button>
                <a class="btn btn-outline-dark buttonbayar" href="PerubahanAlamat" role="button" style="margin: 15px;float: right; margin-right: 0px;">Kembali</a>
                
                </form>
              </div>     <!-- Akhir AccordionKamus -->
          
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->

  </div> <!-- Akhir Isi -->
@endsection

@section('JS')
    <!-- POPOVERS -->
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
 <!-- POPOVERS -->
 
 <!-- VALIDATION FORM -->
     <script >
         $(document).ready(function(){
           var inputs = document.querySelectorAll('form div input');
 
           [].forEach.call(inputs, function(input) {
             input.addEventListener('invalid',function(e){
               $(".PR_Alamat").collapse('show');
               
             });
           });
         }); 
     </script>
 <!-- VALIDATION FORM -->
@endsection