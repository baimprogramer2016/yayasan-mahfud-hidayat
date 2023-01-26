<div class="row" >
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      
        <div class="media">
          <div class="row ">
            <div class="col-md-6">
                <img width="500" src="{{ asset("uploads/ktp/".$data->file_ktp) }}" alt="">
            </div>
            <div class="col-md-6">
              <table border=1 style="border:1px solid #cedadc;" class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama Siswa</td>
                    <td>{{ $data->nama_siswa }}</td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>{{ $data->kelas }}</td>
                  </tr>
                  <tr>
                    <td>Nama Sekolah</td>
                    <td>{{ $data->sekolah }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $data->tgl_lahir }}</td>
                  </tr>
                  <tr>
                    <td>Nama Orang tua</td>
                    <td>{{ $data->nama_orang_tua }}</td>
                  </tr>
                  <tr>
                    <td>Kontak</td>
                    <td>{{ $data->nomor_hp }}</td>
                  </tr>
                  <tr>
                    <td>Nomor KTP</td>
                    <td>{{ $data->nomor_ktp }}</td>
                  </tr>
                  <tr>
                    <td>Pesan</td>
                    <td>{{ $data->pesan }}</td>
                  </tr>
                </tbody>
              </table>
          
            </div>
            <a href ='{{ route('pendaftaran-detail', $data->id) }}' type="button" class="btn btn-sm btn-primary mr-2" target="_blank">Print</a>
              <a type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

