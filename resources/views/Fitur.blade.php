@extends('layout.main')

@section('title', 'Fitur')

@section('css')
    <!-- Our Custom CSS -->
    
    <link rel="stylesheet" href="profilpolis.css">
@endsection

@section('isi')
<div id="isi">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up float-right" style="color: black;"></i></button>
    <!-- Isi profil Polis 1 -->
        <div class="card">
          <h5 class="card-header bg-light" style="color: black;font-weight: bold;">Mitra Program Loyalty Card</h5>

          <div class="card-body">
            <!-- <input type="text" class="boxSearch" placeholder="Search..." /> -->
              
              <div class="row">
                <div id="accordionKamus" class="col-lg-7 col-xs-12">
                
                    @foreach ($fitur as $fitur)
                    <div class="syarat">
                      <li href="#demo" class="list-group-item bg-light" data-toggle="collapse" aria-expanded="true">
                          {{$fitur->nama_fitur}}
                          <span class="collapsed"> <i class="fas fa-chevron-circle-down float-right"> </i> </span>
                          <span class="expanded"> <i class="fas fa-chevron-circle-up float-right"></i> </span>
                      </li>
                      <div id="demo" class="collapse show" data-parent="#demo" style="margin-top: 15px; margin-bottom: 15px;">
                      <p style="padding-left: 35px;">{{ $fitur->keterangan }}</p>
                      </div>
                    </div> 
                    @endforeach                     
    
                  </div>     <!-- Akhir AccordionKamus -->
                  
                  <div class="col-lg-5 col-xs-12 mx-auto mt-4">
                    <center><img src="{{ ('img/FWD_Insurance_LoyaltyCard.jpg') }}" height="200px" width="400px"></center>
                  </div>
              </div>
          
          </div> <!-- Akhir Card Body -->
          
        </div>  <!-- Akhir Card-->

  </div> <!-- Akhir Isi -->
@endsection

