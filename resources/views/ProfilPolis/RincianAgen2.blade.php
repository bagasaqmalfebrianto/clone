@extends('layout.main')

@section('title', 'Profil Polis - Rincian Agen')

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
                <a class="nav-link" href="ProfilPolis2">Rincian Polis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DataPersonal2">Data Personal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PenerimaManfaat2">Penerima Manfaat</a>
              </li>
              <li class="nav-item active">
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
                          Rincian Agen 
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
                                       <h6 style="font-weight: bolder;">No. Polis : 000000193121</h6>
                                  </div>

                                  <div class="line"></div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                              
                                        <div class="form-group col">
                                            <label>Nama Agen Aktif</label>
                                            <input class="form-control" type="text" value="Andri Siswani" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Nama Agen Produksi</label>
                                            <input class="form-control" type="text" value="Wawan Setiawan" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Nama Agency Director</label>
                                            <input class="form-control" type="text" value="Neni R." readonly>
                                        </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                          <div class="form-group col">
                                              <label>Status Agen Aktif</label>
                                              <input class="form-control" type="text" value="Aktif" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Status Agen Produksi</label>
                                              <input class="form-control" type="text" value="Tidak Aktif" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Telepon Kantor Cabang</label>
                                              <input class="form-control" type="text" value="022-8584981" readonly>
                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          <div class="form-group col">
                                              <label>Telp. Hp Agen Aktif</label>
                                              <input class="form-control" type="text" value="081282182038" readonly>
                                          </div>

                                          <div class="form-group col">
                                            <label>Alamat Kantor Pemasaran</label>
                                            <textarea class="form-control" readonly style="height: 125px">Jl. Wastu Kencana No 87 Bandung 40116</textarea>
                                        </div>

                                      </form>
                                  </div>

                              </div>
                          </div>

                      </div>
                    </div>
                  </div>

                </div>
                  <!-- Akhir Accordion -->
          </div>
        </div> 
        <!-- Akhir Card-->
    
</div>
<!-- Akhir Isi -->
@endsection