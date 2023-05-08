  <!-- ======= Features Section ======= -->
  <section id="testimonial" class="features">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Testomonial</h2>
        <p>Video Testimonial</p>
        <div class="row">

          @IF($datavideotestimonial->count() > 0)
          @foreach ($datavideotestimonial as $item_testimonial)
          <div class="col-md-4 col-sm-4 mt-3">
            <iframe width="400" height="200" src="{{ $item_testimonial->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div> 
          @endforeach
          @else 
          <div class="col-md-12 col-sm-12 mt-3">
            <div class="alert alert-primary">
              <div class="p">Video Testimonial Belum Tersedia</div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section><!-- End Features Section -->