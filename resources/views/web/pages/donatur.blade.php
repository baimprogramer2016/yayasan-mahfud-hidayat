<section id="donatur" class="counts">
    <div class="container">
        
        <div class="section-title" data-aos="fade-up">
            <h2>Rekening</h2>
            <p>Info Rekening</p>
          </div>

      <div class="row mb-3" data-aos="fade-up">
        <div class="col-lg-12 col-md-12">
          <div class="count-box">
            <i class="bi p-1"><sup class="mt-3" style="font-size:20px" >RP</sup></i>
            {{-- Donatur --}}
            @IF($datarekening->aktif == 1)
            <p>{{ ($datarekening->judul !='') ? 'Dana yang Terkumpul' : $datarekening->judul }}</p>
            <span data-purecounter-start="0" data-purecounter-end="{{ $datarekening->nominal }}" data-purecounter-duration="2" data-purecounter-separator=true class="purecounter"></span>
            @endif
         
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-lg-6 col-md-6">
          <div class="count-box">
          
            <h3 class="mt-3">{{ $datarekening->nama_bank1 }}<h3>
              <h4 class="text-success">{{ $datarekening->nomor_rekening1 }}</h4>    
              <h5>{{ $datarekening->atas_nama1 }}</h5>    
         
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="count-box">
          
            <h3 class="mt-3">{{ $datarekening->nama_bank2 }}<h3>
              <h4 class="text-success">{{ $datarekening->nomor_rekening2 }}</h4>    
              <h5>{{ $datarekening->atas_nama2 }}</h5>    
         
          </div>
        </div>
      </div>

    </div>
  </section>

