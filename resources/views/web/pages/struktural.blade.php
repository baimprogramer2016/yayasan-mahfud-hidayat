  <!-- ======= Testimonials Section ======= -->
  <section id="struktural" class="testimonials" style="background-image: url('{{ asset('uploads/'.$datastrukturalbg->image) }}'); no-repeat">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($datastruktural as $item_struktural)
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset("uploads/".($item_struktural->image ?? '')) }}" class="testimonial-img" alt="">
              <h3>{{ $item_struktural->nama ?? '' }}</h3>
              <h4>{{ $item_struktural->jabatan ?? '' }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $item_struktural->kutipan ?? '' }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          @endforeach     
         

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
