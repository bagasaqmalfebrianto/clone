@extends('layout.main')

@section('title', 'Kamus')

@section('css')
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <h5 class="card-header bg-light" style="color: black;font-weight: bold;">Kamus</h5>

          <div class="card-body">
            <!-- <input type="text" class="boxSearch" placeholder="Search..." /> -->
            <div class="input-group col-sm-12 col-md-5 mx-auto mb-3">
                    <input type="text" class="form-control boxSearch" placeholder="Ketik Pencarian Disini">
            </div>
              <div class="line"></div>
              <div id="accordionKamus" class="col-8 mx-auto">
                
                
                @foreach ($kamus as $kms)
                    <div class="kamus">
                        <li href="#demo{{$kms->id_kamus}}" class="list-group-item bg-light" data-toggle="collapse">{{$kms->nama_kamus}} <i class="fas fa-chevron-circle-down float-right"></i></li>
                        <div id="demo{{$kms->id_kamus}}" class="collapse" data-parent="#accordionKamus">
                            <p>{{$kms->keterangan}}</p>
                        </div>
                    </div>
                    
                @endforeach
                <div class="d-flex">
                    <div class="mx-auto mt-4">
                        {{ $kamus->links() }}
                    </div>
                </div>
                
                
                
              </div>     <!-- Akhir AccordionKamus -->
              
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->
        
  </div> <!-- Akhir Isi -->
@endsection

@section('JS')
<script>
    $(document).ready(function($){

        $('.kamus li').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.kamus li').each(function(){
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