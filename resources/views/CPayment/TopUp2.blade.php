@extends('layout.main')

@section('title', 'COMM Payment - Top Up Single')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
  <!-- Isi profil Polis 1 -->
      <div class="card">
        <h5 class="card-header bg-light" style="color: black;font-weight: bold;">Top Up Single</h5>

        <div class="card-body">
            <div class="container">
                <div class="row ">
                    <div class="col-md-5">
                      <p style="font-size: 13px; text-align: center;">Bidang dengan tanda bintang (*) sebelum bidang wajib diisi</p>
                        <form>
                
                          <div class="form-group col-md-10 mx-auto">
                              <label>No. Polis (*)</label>
                              <select class="form-control" id="SelectPolis1" onchange="location = this.value;">
                                <option value="TopUp">000000136651</option>
                                <option value="TopUp2" selected="selected">000000193121</option>
                              </select>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Nama Tertanggung</label>
                              <input class="form-control" type="text" value="Rossy Rahmawati" readonly>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Nama Pemegang Polis</label>
                              <input class="form-control" type="text" value="Andrian" readonly>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Jenis Produk</label>
                              <input class="form-control" type="text" value="Investasi" readonly>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Email</label>
                              <input class="form-control" type="email" value="andrian@gmail.com" readonly>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Nomor Telepon</label>
                              <input class="form-control" type="tel" value="021-7434981" readonly>
                          </div>

                          <div class="form-group col-md-10 mx-auto">
                              <label>Jumlah Bayar (*)</label>
                              <input class="form-control" type="number" placeholder="Masukkan Total Bayar" required>
                              <div class="invalid-feedback">
                                  Masukkan Total Bayar 
                              </div>
                          </div>            

                          <button class="btn btn-warning float-right" type="submit" href="profilpolis1.html" >Bayar</button>
                        </form>

                    </div>
                    <div class="col-md-1">
                      <div class="line_vertikal1 mx-auto"></div>
                      
                    </div>

                    <div class="col-md-6">
                      <h6 class="font-weight-bold">Catatan</h6>
                      <div class="row">
                        <ul type="disc">
                            <li>Pembayaran hanya dapat menggunakan mata uang Rupiah (IDR)</li>
                            <li>Pembayaran tidak diperbolehkan menggunakan kartu kredit/Mail Order/Cheque/Bilyet, untuk pembayaran selain kartu debit BCA akan terbaca sebagai pembayaran dengan menggunakan kartu kredit</li>
                            <li>Pembayaran Melalui Virtual Account ataupun Finpay hanya dapat digunakan untuk pembayaran 1 (satu) polis saja</li>
                            <li>Pembayaran Melalui Virtual Account maupun Finpay akan dikenakan biaya administrasi mengikuti ketentuan Bank yang berlaku</li>
                            <li>PT. Commonwealth Life tidak pernah meminta atau menanyakan nama pengguna dan sandi rahasia Anda. Jangan memberitahukan nama pengguna dan sandi rahasia Anda kepada pihak lain. Jika Anda memberitahukan atau memberikan nama pengguna dan sandi rahasia Anda kepada pihak lain, maka Anda memberikan wewenang kepada pihak lain untuk menggunakan akun Anda. Setiap transaksi dan/atau kegiatan yang terjadi atau penyalahgunaan atas akun anda tersebut akan menjadi tanggung jawab Anda</li>
                            
                        </ul>
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