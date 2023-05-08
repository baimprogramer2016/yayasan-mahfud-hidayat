
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Tester dan Terapis</p>
      </div>

      <div class="row" data-aos="fade-left">

        @if($datateam != '')
        @foreach($datateam as $item_team)
        <div class="col-lg-2 col-md-3 mb-2">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{ asset("uploads/".($item_team->image ?? 'person_1.jpg')) }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{ $item_team->nama ?? '' }}</h4>
              <span>{{ $item_team->jabatan ?? '' }}</span>
             
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>

    </div>
  </section><!-- End Team Section -->
