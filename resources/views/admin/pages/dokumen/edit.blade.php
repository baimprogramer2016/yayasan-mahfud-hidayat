  <form action="{{ route('update-dokumen', $data->id) }}" method="POST">
    @csrf
    <div class="form-group" >
      <div class="form-group" >
        <label for="judul">Keterangan Dokument</label>
        <input type="hidden" required name="kode" class="form-control" id="kode" value=0>
        <input type="text" required name="nama" class="form-control" id="nama" value="{{ $data->nama }}">
      </div>
    </div>
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
  </form>