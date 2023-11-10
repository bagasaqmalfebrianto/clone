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
              
              <li class="nav-item">
                <a class="nav-link" href="HistoriPerubahan1">Histori Perubahan</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="TagihanPremi1">Tagihan Premi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="HistoriKlaim1">Histori klaim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="HistoriPembayaran1">Histori Pembayaran</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
                <div class="accordion" id="accordionExample">

                    <!-- Card 1 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Ringkasan Tagihan 
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
                                                    <label>No Kode Tagihan</label>
                                                    <input class="form-control" type="text" value="87090321" readonly>
                                                </div>
                                                
                                                <div class="form-group col">
                                                    <label>Premi</label>
                                                    <input class="form-control" type="text" value="Rp. 350.000" readonly>
                                                </div>

                                        </form>
                                    </div>


                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                        <form>
                                            
                                                <div class="form-group col">
                                                    <label>No. Kartu Kredit / Rekening</label>
                                                    <input class="form-control" type="text" value="1010005159124" readonly>
                                                </div>

                                                <div class="form-group col">
                                                    <label>Loyalty Card</label>
                                                    <input class="form-control" type="text" value="082067300033411" readonly>
                                                </div>
                                                
                                                <div class="form-group col">
                                                    <label>Tanggal Debet</label>
                                                    <input class="form-control" type="text" value="8" readonly>
                                                </div>

                                        </form>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                        <form>
                                            
                                                <div class="form-group col">
                                                    <label>Jatuh Tempo Sebelumnya</label>
                                                    <input class="form-control" type="text" value="2020/05/08" readonly>
                                                </div>

                                                <div class="form-group col">
                                                    <label>Jatuh Tempo Berikutnya</label>
                                                    <input class="form-control" type="text" value="2020/06/08" readonly>
                                                </div>
                                                
                                                <div class="form-group col">
                                                    <label>Akhir Jatuh Tempo</label>
                                                    <input class="form-control" type="text" value="2020/07/23" readonly>
                                                </div>

                                        </form>
                                    </div>
                              </div>
                          </div> <!-- Akhir Container -->

                      </div> <!-- Akhir card body -->
                    </div>
                  </div> <!-- Akhir Card 1 -->

                  <!-- Card 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Rincian Pembayaran 
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
                            <th>No Kode Tagihan</th>
                            <th>Jatuh Tempo</th>
                            <th>Masa Leluasa</th>
                            <th>Mata Uang</th>
                            <th>Total Bayar</th>
                            <th>Premi</th>
                            <th>Status Bayar</th>
                            <th>Tanggal Bayar</th>
                            <th></th>
                        </tr>
                      </thead>

                      <tbody class="bg-light">
                        <tr>
                          <td></td>
                          <td>2020/06/08</td>
                          <td>2020/07/23</td>
                          <td>RP</td>
                          <td>0.00</td>
                          <td>350.000</td>
                          <td>N</td>
                          <td></td>
                          <td></td>
                        </tr>

                        <tr>
                          <td>8655710</td>
                          <td>2020/05/08</td>
                          <td>2020/06/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2020/05/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>
                        
                        <tr>
                          <td>8601110</td>
                          <td>2020/04/08</td>
                          <td>2020/05/23</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2020/04/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8543912</td>
                          <td>2020/03/08</td>
                          <td>2020/04/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2020/03/06</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8489690</td>
                          <td>2020/02/08</td>
                          <td>2020/03/24</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2020/02/07</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8432213</td>
                          <td>2020/01/08</td>
                          <td>2020/02/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2020/01/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8374123</td>
                          <td>2019/12/08</td>
                          <td>2019/01/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/12/06</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8317712</td>
                          <td>2019/11/08</td>
                          <td>2019/12/23</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/11/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>

                        <tr>
                          <td>8259600</td>
                          <td>2019/10/08</td>
                          <td>2019/11/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/10/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr> 

                        <tr>
                          <td>8201886</td>
                          <td>2019/09/08</td>
                          <td>2019/10/23</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/09/06</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>  

                        <tr>
                          <td>8143032</td>
                          <td>2019/08/08</td>
                          <td>2019/09/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/08/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>  

                        <tr>
                          <td>8083611</td>
                          <td>2019/07/08</td>
                          <td>2019/08/22</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/07/08</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr> 

                        <tr>
                          <td>8047715</td>
                          <td>2019/06/08</td>
                          <td>2019/07/23</td>
                          <td>RP</td>
                          <td>350.000</td>
                          <td>350.000</td>
                          <td>Y</td>
                          <td>2019/06/11</td>
                          <td><button type="button" class="btn btn-warning btn-sm font-weight-bold" data-toggle="modal" data-target="#detailtagihan">Detail</button></td>
                        </tr>                                  
                      </tbody>

                    </table>
                  </div>
                      </div>
                    </div>
                  </div>
                  <!-- Akhir Card 2 -->

                </div>
                  <!-- Akhir Accordion -->
          </div>
          <!-- Akhir Card Body -->
        </div> 
        <!-- Akhir Card-->
    
</div>
<!-- Akhir Isi -->

<div class="modal fade" id="detailtagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <label>Nama Pemilik Polis</label>
                                  <input class="form-control" type="text" value="Andrian" readonly>
                              </div>

                              <div class="form-group col">
                                  <label>Cash Entry ID</label>
                                  <input class="form-control" type="text" value="38800411" readonly>
                              </div>
                              
                              <div class="form-group col">
                                  <label>BCN</label>
                                  <input class="form-control" type="text" value="8655807" readonly>
                              </div>
                          </form>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                          <form>
                              <div class="form-group col">
                                  <label>Pembayaran Untuk</label>
                                  <input class="form-control" type="text" value="Renewal" readonly>
                              </div>

                              <div class="form-group col">
                                  <label>Premi</label>
                                  <input class="form-control" type="text" value="Rp. 350.000" readonly>
                              </div>
                              
                              <div class="form-group col">
                                  <label>Jatuh Tempo</label>
                                  <input class="form-control" type="text" value="2019/06/08" readonly>
                              </div>
                          </form>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                          <form>
                              <div class="form-group col">
                                  <label>Akhir Jatuh Tempo</label>
                                  <input class="form-control" type="text" value="2019/07/23" readonly>
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
                          <th>Tanggal Masuk</th>
                          <th>Jenis Bayar</th>
                          <th>Tanggal Bayar</th>
                          <th>Nilai Kurs</th>
                          <th>Mata Uang</th>
                          <th>Total Bayar</th>
                      </tr>
                    </thead>

                    <tbody class="bg-light">
                      <tr>
                        <td>2019/06/11</td>
                        <td>AUTODEBET-REK MANDIRI</td>
                        <td>2019/06/10</td>
                        <td>14.457</td>
                        <td>RP</td>
                        <td>350.000</td>
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