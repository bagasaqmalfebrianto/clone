
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>



    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/profilpolis.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

     <!-- Custom styles for this page -->


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">


</head>
<body>
<div id="isi">
    {{-- <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button> --}}
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
                            {{-- <th>Nama Payor</th> --}}
                            <th>Status Polis</th>
                            <th>Jenis Produk</th>
                            <th>Jatuh Tempo</th>
                            <th>Periode Pembayaran</th>
                            <th>Biaya Premi</th>
                        </tr>
                      </thead>
                      <tbody class="">
                        <tr>
                            <td>{{ $data_user->no_polis }}</td>
                            <td>{{ $data_user->nama_lengkap }}</td>
                            <td>{{ $user->nama_penerima }}</td>
                            {{-- <td>Andrian</td> --}}
                            <td>Active</td>
                            <td>{{ $user->jenis_asuransi }}</td>
                            <td>{{ $newDate }}</td>
                            <td>{{ $user->periode_pembayaran }}</td>
                            <td>{{ $user->jumlah_tanggungan }}</td>
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
                                            <br><img src="../images/bca-va.png">
                                          </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bayar" id="BCA2" value="option2">
                                          <label class="form-check-label" for="BCA2">BCA KlikPay
                                            <br><img src="../images/bca-clickpay.png">
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
                                            <br><img src="../images/visa.png">
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
                                            <br><img src="../images/finpaygabung.png">
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

<div class="overlay"></div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <script src="js/js1.js"></script>
</body>
</html>
