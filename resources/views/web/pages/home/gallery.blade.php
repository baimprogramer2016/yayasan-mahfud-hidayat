  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Dokumentasi</p>
      </div>

      <div class="row g-0" data-aos="fade-left">

        @if($datagallery != '')
        @foreach ($datagallery as $item_gallery)
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{ asset("uploads/".($item_gallery->image?? '')) }}" class="gallery-lightbox">
              <img src="{{ asset("uploads/".($item_gallery->image?? '')) }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        @endforeach
        @endif

      </div>

    </div>
  </section><!-- End Gallery Section -->
