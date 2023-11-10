@extends('layout.user')

@section('title', 'Profil Polis - Rincian Agen')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="userpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills menuprofil">
              
              <li class="nav-item">
                <a class="nav-link" href="/historiperubahan">Histori Perubahan</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/tagihanpremi">Tagihan Premi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/historiclaim">Histori Klaim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/historipembayaran">Histori Pembayaran</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
                <div class="accordion" id="accordionExample">

                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Tagihan Premi 
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
                                            <label>Status Polis</label>
                                            <input class="form-control" type="text" value="Inforce" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>No. Kode Tagihan</label>
                                            <input class="form-control" type="text" value="14555502" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label>Premi</label>
                                            <input class="form-control" type="text" value="Rp.350.000," readonly>
                                        </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          
                                          <div class="form-group col">
                                              <label>No. Kartu Kredit/Rekening</label>
                                              <input class="form-control" type="text" value="1114000032" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Loyalty Card</label>
                                              <input class="form-control" type="text" value="08972372822" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Tanggal Debet</label>
                                              <input class="form-control" type="text" value="20" readonly>
                                          </div>

                                      </form>
                                  </div>

                                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                      <form>
                                          <div class="form-group col">
                                              <label>Jatuh Tempo Sebelumnya</label>
                                              <input class="form-control" type="text" value="20/10/2023" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Jatuh Tempo Berikutnya</label>
                                              <input class="form-control" type="text" value="20/10/2023" readonly>
                                          </div>

                                          <div class="form-group col">
                                              <label>Akhir Jatuh Tempo</label>
                                              <input class="form-control" type="text" value="20/10/2023" readonly>
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