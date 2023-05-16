
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>{{ $dataalamat->url }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $dataemail->url }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-phone"></i>
              <h4>Telephone:</h4>
            <p>{{ $datatelephone->url }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-youtube"></i>
              <h4>Youtube Channel:</h4>
            <p><a target="_blank" class="text-me" href="{{ $datayoutube->url }}">{{ $datayoutube->url }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-facebook"></i>
              <h4>Facebook:</h4>
              <p><a target="_blank" class="text-me" href="{{ $datafacebook->url }}">{{ $datafacebook->url }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-instagram"></i>
              <h4>Instagram:</h4>
              <p><a target="_blank" class="text-me" href="{{ $datainstagram->url }}">{{ $datainstagram->url }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4  mt-5" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-tiktok"></i>
              <h4>Tiktok: </h4>
              <p><a target="_blank" class="text-me" href="{{ $datatiktok->url }}">{{ $datatiktok->url }}</a></p>
            </div>
          </div>
        </div>
      
      </div>
     
    </div>
  </section><!-- End Contact Section -->
