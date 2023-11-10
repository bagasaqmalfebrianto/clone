@extends('layout.main')

@section('title', 'Profil Polis - Data Personal')

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
            
            <li class="nav-item ">
              <a class="nav-link" href="ProfilPolis1">Rincian Polis</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="DataPersonal1">Data Personal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="PenerimaManfaat1">Penerima Manfaat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="RincianAgen1">Rincian Agen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="RincianUnitLink1">Rincian Unit Link</a>
            </li>
            
          </ul>
        </div>

        <div class="card-body">
              <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Pemilik Polis 
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
                                   <h6 style="font-weight: bolder;">No. Polis : 000000136651</h6>
                              </div>

                                <div class="line"></div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                            
                                      <div class="form-group col">
                                          <label>Nama</label>
                                          <input class="form-control" type="text" value="Andrian" readonly>
                                      </div>

                                      <div class="form-group col">
                                          <label>Alamat Rumah</label>
                                          <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                      </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        
                                        <div class="form-group col">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="text" value="1990/01/05" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Alamat Kantor</label>
                                            <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        <div class="form-group col">
                                            <label>Jenis Kelamin</label>
                                            <input class="form-control" type="text" value="Laki - Laki" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Provinsi</label>
                                            <input class="form-control" type="text" value="Jawa Barat" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Negara</label>
                                            <input class="form-control" type="text" value="Indonesia" readonly>
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
                                          <input class="form-control" type="text" value="Andrian@gmail.com" readonly>
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
                        Tertanggung Polis 
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
                                    <form>
                            
                                      <div class="form-group col">
                                          <label>Nama</label>
                                          <input class="form-control" type="text" value="Andrian" readonly>
                                      </div>

                                      <div class="form-group col">
                                          <label>Alamat Rumah</label>
                                          <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                      </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        
                                        <div class="form-group col">
                                            <label>Provinsi</label>
                                            <input class="form-control" type="text" value="Jawa Barat" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Alamat Kantor</label>
                                            <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>

                                        <div class="form-group col">
                                            <label>Negara</label>
                                            <input class="form-control" type="text" value="Indonesia" readonly>
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
                <!-- Akhir Card 2 -->

                <!-- Card 3 -->
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Pembayar Polis 
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
                                          <label>Nama</label>
                                          <input class="form-control" type="text" value="Andrian" readonly>
                                      </div>

                                      <div class="form-group col">
                                          <label>Alamat Rumah</label>
                                          <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                      </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>
                                        
                                        <div class="form-group col">
                                            <label>Provinsi</label>
                                            <input class="form-control" type="text" value="Jawa Barat" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Alamat Kantor</label>
                                            <textarea class="form-control" readonly style="height: 125px">KOMP. INDAH PERMATA 8 NO. 7 KEC. BUAH BATU  Bandung, JAWA BARAT, INDONESIA</textarea>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <form>

                                        <div class="form-group col">
                                            <label>Negara</label>
                                            <input class="form-control" type="text" value="Indonesia" readonly>
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
                <!-- Akhir Card 3 -->
              </div>
                <!-- Akhir Accordion -->
        </div>
        <!-- Akhir Card Body -->
      </div> 
      <!-- Akhir Card-->
  
</div>
@endsection