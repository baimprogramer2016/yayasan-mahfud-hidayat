
  <!-- ======= Details Section ======= -->
  <section id="program" class="about">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
         
         <div class="img-web" style="background-image: url('{{ asset('uploads/'.$dataprogrammaster->image) }}');">
          
          </div> 
          
         
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3><strong>{{ $dataprogrammaster->judul ?? ''}}</strong></h3>
          <h5>{{ $dataprogrammaster->judul ?? '' }}</h5>
          <p>{!! substr(strip_tags($dataprogrammaster->deskripsi ?? ''),0,600) !!}</p>
          <ul>
            @if($dataprogramdetail != '')  
            @foreach ($dataprogramdetail as $item_program_detail)
              <li class='text-success w-500' style="list-style: none;"><i class="bi bi-check"></i><b> {{ $item_program_detail->judul }}</b></li>
            @endforeach
            @endif
          </ul>
          {{-- <button type="button" class="btn btn-info text-white" style="width:150px;"  data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="return viewPendahuluan()">Selengkapnya</button> --}}
        </div>
      </div>

    </div>
  </section><!-- End Details Section -->