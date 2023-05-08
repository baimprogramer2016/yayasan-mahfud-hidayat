  <form action="{{ route('update-dokumen', $data->id) }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Jenis Dokumen</label>
      <select class="form-control form-control-sm" name="kode" id="kode" >
        <option value="{{ $data->kode }}">{{ $data->nama }}</option>
        <option value="">Pilih Jenis Dokumen</option>
        <option value="1">Proposal</option>
        <option value="2">Laporan Keuangan</option>
      </select>
    </div>
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
  </form>