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
        <form method="POST" enctype="multipart/form-data" action="{{ route('pendaftaran-store') }}">
          @csrf
          <div class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa"
                  required>
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
                <input type="text" class="form-control date-format" name="tgl_lahir" id="tgl_lahir"
                  placeholder="Tanggal Lahir dd/mm/yyyy" required>
                <span class="error" style="display: none">Contoh : 20/03/1991</span>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_orang_tua" class="form-control" id="nama_orang_tua"
                  placeholder="Nama Orang Tua" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control " name="nomor_hp" id="nomor_hp" placeholder="Nomor Handphone"
                  required>
              </div>
            </div>

            <div class="form-group mt-3">
              <input type="number" name="nomor_ktp" class="form-control" id="nomor_ktp" placeholder="Nomor KTP"
                required>
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

<script type="text/javascript">
  var isShift = false;
        var seperator = "/";
        window.onload = function () {
            //Reference the Table.
            var tblForm = document.getElementById("tblForm");

            //Reference all INPUT elements in the Table.
            var inputs = document.getElementsByTagName("input");

            //Loop through all INPUT elements.
            for (var i = 0; i < inputs.length; i++) {
                //Check whether the INPUT element is TextBox.
                if (inputs[i].type == "text") {
                    //Check whether Date Format Validation is required.
                    if (inputs[i].className.indexOf("date-format") != 1) {
                        
                        //Set Max Length.
                        inputs[i].setAttribute("maxlength", 10);

                        //Only allow Numeric Keys.
                        inputs[i].onkeydown = function (e) {
                            return IsNumeric(this, e.keyCode);
                        };

                        //Validate Date as User types.
                        inputs[i].onkeyup = function (e) {
                            ValidateDateFormat(this, e.keyCode);
                        };
                    }
                }
            }
        };

        function IsNumeric(input, keyCode) {
            if (keyCode == 16) {
                isShift = true;
            }
            //Allow only Numeric Keys.
            if (((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || keyCode <= 37 || keyCode <= 39 || (keyCode >= 96 && keyCode <= 105)) && isShift == false) {
                if ((input.value.length == 2 || input.value.length == 5) && keyCode != 8) {
                    input.value += seperator;
                }

                return true;
            }
            else {
                return false;
            }
        };

        function ValidateDateFormat(input, keyCode) {
            var dateString = input.value;
            if (keyCode == 16) {
                isShift = false;
            }
            var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

            //Check whether valid dd/MM/yyyy Date Format.
            if (regex.test(dateString) || dateString.length == 0) {
                ShowHideError(input, "none");
            } else {
                ShowHideError(input, "block");
            }
        };

        function ShowHideError(textbox, display) {
            var row = textbox.parentNode.parentNode;
            var errorMsg = row.getElementsByTagName("span")[0];
            if (errorMsg != null) {
                errorMsg.style.display = display;
            }
        };
        
</script>
@endpush