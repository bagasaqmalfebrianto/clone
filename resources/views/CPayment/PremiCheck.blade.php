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
                      <table class="table table-bordered table-striped text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-warning">
                          <tr>
                              <th>No.</th>
                              <th>Nomor Polis</th>
                              <th>Nama Tertanggung</th>
                              <th>Jatuh Tempo</th>
                              <th>Frekuensi</th>
                              <th>Status Polis</th>
                              <th>Biaya Premi</th>
                              <th>Bayar (*)</th>
                          </tr>
                        </thead>
                        <tbody class="bg-light">
                          <tr>
                              <td>1</td>
                              <td>000000136651</td>
                              <td>Andrian</td>
                              <td>2020/07/20</td>
                              <td>Tahunan</td>
                              <td>Inforce</td>
                              <td>4.500.000</td>
                              <td>
                                  <input type="checkbox" id="bayarCheck" onchange="window.location.href='Premi'" checked>
                              </td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>000000136651</td>
                              <td> Andrian</td>
                              <td>2020/06/08</td>
                              <td>Bulanan</td>
                              <td>Inforce</td>
                              <td>350.000</td>
                              <td><input type="checkbox" id="bayarCheck2" disabled></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div><!-- Akhir Tabel -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1" onchange="window.location.href='PremiCheckSemua'">
                        <label class="form-check-label" for="defaultCheck1">Pilih Semua</label>
                    </div>
                    
                    <fieldset style="padding-top: 2%;">
                    <form class="form-inline" action="PremiLanjutan">
                    <div class="row">
                          <div class="col-12">
                                
                                    <div class="form-group">
                                        <label for="SelectEmail">Email Penerima (*)</label>
                                        <select id="SelectEmail" class="form-control mx-sm-3" required>
                                          <option value="">Select One</option>
                                          <option value="1">andrian@gmail.com</option>
                                        </select>
                                    </div>  
                          </div>
                          <div class="col-12 float-right">
                              <button class="btn btn-warning">Bayar</button>
                          </div>
                    </div>
                    
                    </form>
                    </fieldset>
                    
                    <!-- <input type="checkbox" id="bayarCheck" onchange="window.location.href='CP_Premi_Check.html'"> -->
                    <h6 class="font-weight-bold" style="padding-top: 2%;">Catatan</h6>
                    <ul type="disc">
                        <li>Pembayaran hanya dapat menggunakan mata uang Rupiah (IDR)</li>
                        <li>Bayar Online, adalah pembayaran premi secara online dengan pilihan cara bayar yang telah disediakan melalui Kartu Kredit, Debit Online, & Bank Transfer</li>
                        <li>Polis yang bisa dilakukan pembayaran hanya untuk polis yang non direct debet</li>
                        <li>Metode pembayaran kartu kredit VISA/MASTER dapat menggunakan kartu kredit VISA/MASTER atau kartu debit yang terdaftar sebagai kartu kredit VISA/MASTER.</li>
                        <li>Pembayaran via Virtual Account, Finpay, dan Kartu Kredit hanya dapat digunakan untuk pembayaran 1 polis saja</li>
                        <li>PT. Commonwealth Life tidak pernah meminta atau menanyakan nama pengguna dan sandi rahasia Anda. Jangan memberitahukan nama pengguna dan sandi rahasia Anda kepada pihak lain. Jika Anda memberitahukan atau memberikan nama pengguna dan sandi rahasia Anda kepada pihak lain, maka Anda memberikan wewenang kepada pihak lain untuk menggunakan akun anda. Setiap transaksi dan/atau kegiatan yang terjadi atau penyalahgunaan atas akun anda tersebut akan menjadi tanggung jawab Anda.</li>
                    </ul>
                </div>      
            
            </div>
            <!-- Akhir Card Body -->
          </div> 
          <!-- Akhir Card-->
      
  </div>
  <!-- Akhir Isi -->
@endsection