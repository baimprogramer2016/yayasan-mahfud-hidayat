
  <!-- ======= Contact Section ======= -->

  <section id="pendaftaran" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Pendaftaran</h2>
        <p>Pendaftaran Assessment</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset('images/registrasi.png') }}" class="img-fluid animated" alt="">
        </div>
       
        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <form method="POST" enctype="multipart/form-data" action="{{ route('pendaftaran') }}">
            @csrf
          <div  class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="sekolah" class="form-control" id="sekolah" placeholder="Nama Sekolah" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required>
              </div>
            </div>
           
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_orang_tua" class="form-control" id="nama_orang_tua" placeholder="Nama Orang Tua" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Nomor Handphone" required>
              </div>
            </div>
           
            <div class="form-group mt-3">
              <input type="number" name="nomor_ktp" class="form-control" id="nomor_ktp" placeholder="Nomor KTP" required>
            </div>
            <div class="form-group mt-3">
              <label for="image"><code>Upload KTP</code></label>
              <input type="file" accept="image/*" class="form-control" name="image" id="image" placeholder="Upload KTP" required>
            </div>
          
            <div class="form-group mt-3">
              <textarea class="form-control" name="pesan" id="pesan" rows="3" placeholder="Tulisa Pesan"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pendaftaran</button></div>
          </div>
        </form>
        </div>
      
      </div>

    </div>

  </section><!-- End Contact Section -->

  @push('script-bottom')
    <script src="{{ asset('web/assets/js/jquery-3.6.4.min.js') }}"></script>
      <script>
          $('#image').bind('change', function() {

          //this.files[0].size gets the size of your file.
          if(this.files[0].size > 1000000)
            alert("File tidak boleh lebih dari 1 Mega Byte, File anda saat ini "+ Math.round(this.files[0].size / 1000000)) +' Mega Byte';
          });
        </script>
  @endpush


