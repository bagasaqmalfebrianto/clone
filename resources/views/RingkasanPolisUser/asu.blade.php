@extends('layout.main')

@section('title', 'COMM Payment - Premi Lanjutan')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <h5 class="card-header bg-light" style="color: black;font-weight: bold;">Premi Lanjutan</h5>

          <div class="card-body">
              <div class="container-fluid">
                <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) sebelum bidang wajib diisi</p>
                  <!-- Tabel -->
                  <div class="table-responsive">
                    <table class="table-sm table-bordered table-striped text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-warning">
                        <tr>
                            <th>Nomor Polis</th>
                            <th>Nama Tertanggung</th>
                            <th>Nama Pemegang Polis</th>
                            <th>Nama Payor</th>
                            <th>Status Polis</th>
                            <th>Jenis Produk</th>
                            <th>Jatuh Tempo</th>
                            <th>Tanggal Lapse</th>
                            <th>Biaya Premi</th>
                        </tr>
                      </thead>
                      <tbody class="">
                        <tr>
                            <td>000000136651</td>
                            <td>Andrian</td>
                            <td>Andrian</td>
                            <td>Andrian</td>
                            <td>Inforce</td>
                            <td>INVESTRA LINK</td>
                            <td>2020/07/20</td>
                            <td>2020/08/09</td>
                            <td>4.500.000</td>
                        </tr>


                      </tbody>
                    </table>
                  </div> <!-- Akhir Tabel -->


                  <!-- <div class="row">

                        <div class="align-self-end">
                            <div class="col-md" style="padding-bottom: 10%;">
                                <a class="btn btn-warning" href="profilpolis1.html" role="button">Bayar</a>
                            </div>
                        </div>
                  </div> -->

                  <div class="container-fluid"><h6 class="font-weight-bold" style="padding-top: 2%;">Metode Pembayaran (*)</h6></div>
                  <div class="container-fluid">
                      <div class="row logo">

                          <div class="col-md-8 col-lg-4 mx-auto">
                                <div class="accordion" id="accordionExample">
                                  <div class="card">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                      <input class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" value="E-Payment & Bank Transfer">
                                    </h2>
                                  </div>

                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bayar" id="BCA1" value="option1" checked>
                                          <label class="form-check-label" for="BCA1">BCA Virtual Account
                                            <br><img src="images/bca-va.png">
                                          </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bayar" id="BCA2" value="option2">
                                          <label class="form-check-label" for="BCA2">BCA KlikPay
                                            <br><img src="images/bca-clickpay.png">
                                          </label>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-8 col-lg-4 mx-auto">
                                <div class="accordion" id="accordion2">
                                  <div class="card">
                                  <div class="card-header" id="headingOne">

                                    <h2 class="mb-0">
                                      <input class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseOne" value="Kartu Kredit">
                                    </h2>
                                  </div>

                                  <div id="collapse2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                                    <div class="card-body">

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bayar" id="VISA" value="option3">
                                          <label class="form-check-label" for="VISA">VISA
                                            <br><img src="images/visa.png">
                                          </label>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-8 col-lg-4 mx-auto">
                                <div class="accordion" id="accordion3">
                                  <div class="card">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                      <input class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" value="FinPay">
                                    </h2>
                                  </div>

                                  <div id="collapse3" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                                    <div class="card-body">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bayar" id="FinPay" value="option4">
                                          <label class="form-check-label" for="FinPay">FinPay
                                            <br><img src="images/finpaygabung.png">
                                          </label>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>

                    <div class="align-self-end">
                        <div class="col-md" style="margin-top: 1%;">

                            <a class="btn btn-warning buttonbayar" href="PremiLanjutan" role="button" style="float: right;">Bayar</a>
                            <a class="btn btn-outline-dark buttonbayar" href="Premi" role="button" style="float: right;">Kembali</a>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                  </div>





              </div>

          </div>
          <!-- Akhir Card Body -->
        </div>
        <!-- Akhir Card-->

</div>
<!-- Akhir Isi -->
@endsection
