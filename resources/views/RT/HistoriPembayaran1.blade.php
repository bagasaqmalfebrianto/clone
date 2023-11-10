@extends('layout.main')

@section('title', 'Ringkasan Transaksi - History Pembayaran')

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
                <a class="nav-link" href="HistoriPerubahan1">Histori Perubahan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="TagihanPremi1">Tagihan Premi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="HistoriKlaim1">Histori klaim</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="HistoriPembayaran1">Histori Pembayaran</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
                <div class="accordion" id="accordionExample">

                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Histori Pembayaran 
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
                                  
                                <div class="table-responsive text-center">
                                    <table class="table-sm table-bordered table-hover" id="Table1" width="100%" cellspacing="0">
                                      <thead class="bg-warning">
                                        <tr>
                                            <th>Jenis Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Total Bayar</th>
                                            <th>Tanggal Valid</th>
                                            <th></th>
                                        </tr>
                                      </thead>

                                      <tbody class="bg-light">
                                        <tr>
                                          <td>Withdraw</td>
                                          <td>05/04/2019</td>
                                          <td>Rp. 40.000.000</td>
                                          <td>09/04/2019</td>
                                          <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailPembayaran">Detail</button></td>
                                        </tr>
                                      </tbody>

                                    </table>
                                  </div> <!-- Akhir Tabel 1 -->

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

<div class="modal fade" id="detailPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No. Polis : 000000136651</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                          <form>
                              <div class="form-group col">
                                  <label>Tanggal Transaksi</label>
                                  <input class="form-control" type="text" value="2019/04/05" readonly>
                              </div>
                          </form>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                          <form>
                              <div class="form-group col">
                                  <label>Jenis Bayar</label>
                                  <input class="form-control" type="text" value="Transfer" readonly>
                              </div>
                          </form>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                          <form>
                              <div class="form-group col">
                                  <label>Total Pembayaran</label>
                                  <input class="form-control" type="text" value="Rp. 40.000.000" readonly>
                              </div>
                          </form>
                      </div>
                 </div>
             </div> 

              <div class="line"></div>

              <div class="table-responsive text-center">
                  <table class="table-sm table-striped table-bordered table-hover" id="Table1" width="100%" cellspacing="0">
                    <thead class="bg-warning">
                      <tr>
                          <th>No. PR</th>
                          <th>Pemegang Rekening</th>
                          <th>No. Rekening</th>
                          <th>Nama Bank</th>
                          <th>Tanggal Valid</th>
                          <th>Mata Uang</th>
                          <th>Total Bayar</th>
                          <th>Keterangan</th>
                      </tr>
                    </thead>

                    <tbody class="bg-light">
                      <tr>
                        <td>36650100</td>
                        <td>IBU DEWI INDRIYANI</td>
                        <td>0695087110</td>
                        <td>Bank BNI Syariah</td>
                        <td>2019/04/09</td>
                        <td>RP</td>
                        <td>40.000.000</td>
                        <td>Withdraw Polis 000000136651 TRF CAB KANTOR PUSAT - 4270043</td>
                      </tr>
                    </tbody>

                  </table>
              </div> <!-- Akhir Tabel 1 --> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
</div>
@endsection