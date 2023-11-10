@extends('layout.main')

@section('title', 'Profil Polis - Penerima Manfaat')

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
              <li class="nav-item">
                <a class="nav-link" href="DataPersonal1">Data Personal</a>
              </li>
              <li class="nav-item active">
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
                          <!-- <span class="collapsed"><i class="fa fa-plus"></i></span> 
                          <span class="expanded"><i class="fa fa-minus"></i></span>  -->
                          Penerima 1 
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
                                    <h6 style="font-weight: bolder;">No. Polis : 000000136651</h6>
                                </div>

                                  <div class="line"></div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                              
                                        <div class="form-group col">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" value="Indriyani" readonly>
                                        </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                          <div class="form-group col">
                                              <label>Persentase</label>
                                              <input class="form-control" type="text" value="100%" readonly>
                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          <div class="form-group col">
                                              <label>Hubungan</label>
                                              <input class="form-control" type="text" value="Ibu" readonly>
                                          </div>

                                      </form>
                                  </div>

                              </div>
                          </div> <!-- Akhir Container -->

                      </div> <!-- Akhir card body -->
                    </div>
                  </div>

                </div>
                  <!-- Akhir Accordion -->
          </div>
          <!-- Akhir Card Body -->
        </div> 
        <!-- Akhir Card-->
    
</div>
<!-- Akhir Isi -->
@endsection