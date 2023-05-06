  <!-- ======= About Section ======= -->
  <section id="pendahuluan" class="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
         <img height="400"src="{{ asset("uploads/".($datapendahuluan->image ?? '')) }}"/>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>Pendahuluan</h3>
          <h5>{{ $datapendahuluan->judul ?? '' }}</h5>
          <p>{!! substr(strip_tags($datapendahuluan->deskripsi ?? ''),0,600) !!}</p>
          <button type="button" class="btn btn-info text-white" style="width:150px;"  data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="return viewPendahuluan()">Selengkapnya</button>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
          <img height="400"src="{{ asset("uploads/".($datalatarbelakang->image ?? '')) }}"/>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>Latar Belakang</h3>
          <h5>{{ $datalatarbelakang->judul ?? '' }}</h5>
          <p>{!! substr(strip_tags($datalatarbelakang->deskripsi ?? ''),0,600) !!}</p>
          <button type="button" class="btn btn-info text-white" style="width:150px;"  data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="return viewLatarBelakang()">Selengkapnya</button>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->


