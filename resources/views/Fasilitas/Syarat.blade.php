@extends('layout.main')

@section('title', 'Fasilitas - Syarat Perubahan & Prosedur Klaim')

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
                <a class="nav-link" href="Fasilitas">Formulir</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Syarat">Syarat Perubahan & Prosedur Klaim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PerubahanAlamat">Perubahan Alamat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Grafik">Grafik Investra</a>
              </li>
              
            </ul>
          </div>

          <div class="card-body">
            <!-- <input type="text" class="boxSearch" placeholder="Search..." /> -->

              <div class="input-group col-sm-12 col-md-5 mx-auto mb-3">
                  <input type="text" class="form-control boxSearch" placeholder="Ketik Pencarian Disini">
              </div>
              
              <div class="line"></div>
              
              <div id="accordionKamus" class="mx-auto">

                @foreach ($syarat as $syt)
                <div class="titleprosedur" id="syarat_ubah">
                    <h5>{{$syt->nama_klaim}}</h5>
                    <p>{!!$syt->keterangan!!}</p>
                </div>

                    @foreach ($syarat as $syts)
                        <div class="syarat">
                            <li href="#demo{{$syts->id_type}}" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="false">
                                {{$syts->nama_type}} 
                                <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                                <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                            </li>
                            <div id="demo{{$syts->id_type}}" class="collapse" data-parent="#demo">
                                <img src="img/{{$syts->gambar}}" class="mr-3" alt="">
                                {{-- <img src="img/{{$syts->gambar}}" class="mr-3"> --}}
                                <p style="font-weight: normal;color: black">
                                    {!!$syts->keterangan_type!!}
                                    
                                </p>
                                <br>                                        
                            </div>
                        </div>
                        
                    @endforeach
                @break

                @endforeach
                

              </div>     <!-- Akhir AccordionKamus -->
          
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->

</div> <!-- Akhir Isi -->
@endsection

@section('JS')
<script>
    $(document).ready(function($){

        $('.syarat li').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.syarat li').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }

            });
            $('#accordionKamus .collapse').attr("data-parent","#accordionKamus");
            $('#accordionKamus .collapse').collapse('hide');
            
        });

        });
</script>
@endsection