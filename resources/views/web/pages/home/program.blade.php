
  <!-- ======= Details Section ======= -->
  <section id="program" class="details">
    <div class="container">

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="{{ asset("uploads/".($dataprogrammaster->image ?? '')) }}" class="img-fluid" alt="">
          
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>{{ $dataprogrammaster->judul ?? ''}}</h3>
          <p>{!! $dataprogrammaster->deskripsi ?? '' !!}</p>
          <ul>
            @if($dataprogramdetail != '')  
            @foreach ($dataprogramdetail as $item_program_detail)
              <li><i class="bi bi-check"></i> {{ $item_program_detail->judul }}</li>
            @endforeach
            @endif
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Details Section -->