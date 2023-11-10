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
    <!-- Isi profil Polis 1 -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills menuprofil">
              
              <li class="nav-item active">
                <a class="nav-link" href="ProfilPolis2">Rincian Polis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DataPersonal2">Data Personal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PenerimaManfaat2">Penerima Manfaat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RincianAgen2">Rincian Agen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RincianUnitLink2">Rincian Unit Link</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">

                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                            No. Polis: 000000193121
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
                                <h6 style="font-weight: bolder;">No. Aplikasi: 00587213</h6>
                            </div>

                            <div class="line"></div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Polis Diterbitkan</label>
                                                              <input class="form-control" type="text" value="2019/07/21" readonly>
                                                          </div>

                                                          <div class="form-group col">
                                                              <label>Mata Uang</label>
                                                              <input class="form-control" type="text" value="Rupiah" readonly>
                                                          </div>
                                                            
                                    <div class="form-group col">
                                                              <label>Cara Pembayaran Premi</label>
                                                              <input class="form-control" type="text" value="Direct Debet" readonly>
                                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Status Polis</label>
                                                              <input class="form-control" type="text" value="Inforce" readonly>
                                                          </div>
                                                          <div class="form-group col">
                                                              <label>Masa Pembayaran Premi</label>
                                                              <input class="form-control" type="text" value="70 Tahun" readonly>
                                                          </div>
                                                            
                                                            <div class="form-group col">
                                                              <label>Frekuensi Pembayaran Premi</label>
                                                              <input class="form-control" type="text" value="Tahunan" readonly>
                                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Produk Dasar</label>
                                                              <input class="form-control" type="text" value="INVESTRA LINK" readonly>
                                                          </div>

                                                          <div class="form-group col">
                                                              <label>Alamat Korespondensi</label>
                                                              <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                                          </div>
                                              

                                      </form>
                                  </div>
                                  
                                  <div class="line"></div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Telepon</label>
                                                              <input class="form-control" type="text" value="021-7434981" readonly>
                                                          </div>

                                                          <div class="form-group col">
                                                              <label>Fax</label>
                                                              <input class="form-control" type="text" value="-" readonly>
                                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Handphone</label>
                                                              <input class="form-control" type="text" value="082127362982" readonly>
                                                          </div>

                                                          <div class="form-group col">
                                                              <label>Email</label>
                                                              <input class="form-control" type="text" value="tira@gmail.com" readonly>
                                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Pin BB</label>
                                                              <input class="form-control" type="text" value="-" readonly>
                                                          </div>

                                      </form>
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
                          Rincian Produk 
                          <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                          <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table-sm table-striped text-center table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead class="bg-warning">
                              <tr>
                                  <th>Jenis Produk</th>
                                  <th>Nama Produk</th>
                                  <th>Masa Pertanggungan</th>
                                     <th>Mata Uang</th>
                                  <th>Uang Pertanggungan</th>
                                  <th>Rincian Premi</th>
                              </tr>
                            </thead>
                            <tbody class="bg-light">
                              <tr>
                                <td>Product Dasar</td>
                                <td>INVESTRA PREMIER</td>
                                <td>99</td>
                                <td>RP</td>
                                <td>40.500.000</td>
                                <td>199.200</td>
                              </tr>
                              <tr>
                                <td>Product Tambahan</td>
                                <td>COMMWaiver 55</td>
                                <td>55</td>
                                <td>RP</td>
                                <td>0</td>
                                <td>312.060</td>
                              </tr>
                              <tr>
                                <td>Product Tambahan</td>
                                <td>COMM Health Plan F</td>
                                <td>75</td>
                                <td>RP</td>
                                <td>0</td>  
                                <td>1.609.500</td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Akhir Card 2 -->

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
                                      <form>
                                          
                                              <div class="form-group col">
                                                              <label>Frekuensi Pembayaran Premi</label>
                                                              <input class="form-control text-dark" type="text" value="Tahunan" readonly>
                                                          </div>

                                                          <div class="form-group col">
                                                              <label >Top Up Reguler</label>
                                                              <input class="form-control" type="text" value="Rp. 1.200.000" readonly>
                                                          </div>
                                                            
                                    <div class="form-group col">
                                                              <label>Tanggal Akhir Jatuh Tempo</label>
                                                              <input class="form-control" type="text" value="2020/07/21" readonly>
                                                          </div>

                                      </form>
                                  </div>

                              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                  <form>
                                      
                                          <div class="form-group col">
                                                          <label for="exampleInputEmail1" >Modal Premi</label>
                                                          <input class="form-control" type="text" value="Rp. 4.350.000" readonly>
                                                      </div>

                                                      <div class="form-group col">
                                                          <label for="exampleInputEmail1">Biaya Asuransi Bulanan</label>
                                                          <input class="form-control" type="text" value="Rp. 159.600" readonly>
                                                      </div>
                                                        
                               <div class="form-group col">
                                                          <label for="exampleInputEmail1">Tanggal Jatuh Tempo Berikutnya</label>
                                                          <input class="form-control" type="text" value="2020/07/21" readonly>
                                                      </div>

                                  </form>
                              </div>

                              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                  <form>
                                      
                                          <div class="form-group col">
                                                          <label>Alokasi Premi Dasar</label>
                                                          <input class="form-control" type="text" value="Rp. 3.000.000" readonly>
                                                      </div>

                                                      <div class="form-group col">
                                                          <label>Biaya Administrasi Bulanan</label>
                                                          <input class="form-control" type="text" value="Rp. 27.500" readonly>
                                                      </div>

                                  </form>
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
          <!-- Akhir Card Body -->
        </div> 
        <!-- Akhir Card-->
    <div class="line"></div>
    <!--Akhir Isi Ringkasan Polis 1 -->

    <!-- Tabel Data Polis -->
    
</div>
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