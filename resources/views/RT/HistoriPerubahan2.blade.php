@extends('layout.main')

@section('title', 'Ringkasan Transaksi - Histori Perubahan')

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
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
  <!-- Isi profil Polis 1 -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills menuprofil">
            
            <li class="nav-item active">
              <a class="nav-link" href="HistoriPerubahan2">Histori Perubahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="TagihanPremi2">Tagihan Premi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HistoriKlaim2">Histori klaim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HistoriPembayaran2">Histori Pembayaran</a>
            </li>
            
          </ul>
        </div>

        <div class="card-body">
              <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Histori Perubahan 
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
                                

                                <div class="table-responsive ">
                                  <table class="table-sm text-center table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-warning">
                                      <tr>
                                          <th>No. Registrasi</th>
                                          <th>Tipe Perubahan</th>
                                          <th>Tanggal Registrasi</th>
                                          <th>Tanggal Valid</th>
                                          <th>Status Perubahan</th>
                                          <th></th>
                                      </tr>
                                    </thead>

                                    <tbody class="bg-light">
                                      <tr>
                                        <td>4030970</td>
                                        <td>Top Up UL</td>
                                        <td>2008/11/14</td>
                                        <td>2008/11/14</td>
                                        <td>Complete</td>
                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailperubahanUL">Detail</button></td>
                                      </tr>

                                      <tr>
                                        <td>5361946</td>
                                        <td>Top Up UL</td>
                                        <td>2010/07/26</td>
                                        <td>2010/07/26</td>
                                        <td>Complete</td>
                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailperubahanUL">Detail</button></td>
                                      </tr>

                                      <tr>
                                        <td>5938336</td>
                                        <td>Withdraw</td>
                                        <td>2011/04/07</td>
                                        <td>2011/04/07</td>
                                        <td>Complete</td>
                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailperubahanWD">Detail</button></td>
                                      </tr>

                                      <tr>
                                        <td>9401243</td>
                                        <td>Withdraw</td>
                                        <td>2014/03/26</td>
                                        <td>2014/03/26</td>
                                        <td>Complete</td>
                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailperubahanWD">Detail</button></td>
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

<!-- Modal Top Up UL -->
<div class="modal fade" id="detailperubahanUL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No. Polis: 000000136651</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <div class="col-md-12 text-center">
              <h6 style="font-weight: bolder;">ID Registrasi : 4030970</h6>
            </div>
            <div class="line"></div>
              <div class="table-responsive text-center">
                  <table class="table-sm table-striped table-bordered table-hover" id="Table1" width="100%" cellspacing="0">
                    <thead class="bg-warning">
                      <tr>
                          <th>No.</th>
                          <th>Aktivitas</th>
                          <th>Tahap</th>
                          <th>Proses 1</th>
                          <th>Proses 2</th>
                          <th>Tanggal Proses Awal</th>
                          <th>Tanggal Proses Akhir</th>
                      </tr>
                    </thead>

                    <tbody class="bg-light">
                      <tr>
                        <td>1</td>
                        <td>Top Up UL</td>
                        <td>1</td>
                        <td>Register Process</td>
                        <td></td>
                        <td>2008/11/14</td>
                        <td>2008/11/14</td>
                      </tr>
                      
                      <tr>
                        <td>2</td>
                        <td>Top Up UL</td>
                        <td>2</td>
                        <td>Checking Document</td>
                        <td>Document Complete</td>
                        <td>2008/11/14</td>
                        <td>2008/11/14</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Top Up UL</td>
                        <td>3</td>
                        <td>Pricing Process</td>
                        <td></td>
                        <td>2008/11/17</td>
                        <td>2008/11/18</td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>Top Up UL</td>
                        <td>4</td>
                        <td>Transaction Report</td>
                        <td></td>
                        <td>2008/11/19</td>
                        <td>2008/11/19</td>
                      </tr>
                    </tbody>

                  </table>
              </div> <!-- Akhir Tabel 1 -->
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-warning">Oke</button> -->
        </div>
      </div>
    </div>
</div>

  <!-- Modal WithDraw -->
<div class="modal fade" id="detailperubahanWD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No. Polis: 000000136651</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <div class="col-md-12 text-center">
              <h6 style="font-weight: bolder;">ID Registrasi : 5938336</h6>
            </div>
            <div class="line"></div>
              <div class="table-responsive text-center">
                  <table class="table-sm table-striped table-bordered table-hover" id="Table1" width="100%" cellspacing="0">
                    <thead class="bg-warning">
                      <tr>
                          <th>No.</th>
                          <th>Aktivitas</th>
                          <th>Tahap</th>
                          <th>Proses 1</th>
                          <th>Proses 2</th>
                          <th>Tanggal Proses Awal</th>
                          <th>Tanggal Proses Akhir</th>
                      </tr>
                    </thead>

                    <tbody class="bg-light">
                      <tr>
                        <td>1</td>
                        <td>Withdraw</td>
                        <td>1</td>
                        <td>Register Process</td>
                        <td></td>
                        <td>2011/04/07</td>
                        <td>2011/04/07</td>
                      </tr>
                      
                      <tr>
                        <td>2</td>
                        <td>Withdraw</td>
                        <td>2</td>
                        <td>Checking Document</td>
                        <td>Document Complete</td>
                        <td>2011/04/07</td>
                        <td>2011/04/07</td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>Withdraw</td>
                        <td>3</td>
                        <td>Administration Process</td>
                        <td></td>
                        <td>2011/04/07</td>
                        <td>2011/04/07</td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>Withdraw</td>
                        <td>4</td>
                        <td>Transaction Report</td>
                        <td></td>
                        <td>2011/04/12</td>
                        <td>2011/04/12</td>
                      </tr>
                    </tbody>

                  </table>
              </div> <!-- Akhir Tabel 1 -->
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-warning">Oke</button> -->
        </div>
      </div>
    </div>
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