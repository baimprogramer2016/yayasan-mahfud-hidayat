<form action="{{ route('simpan-dokumen') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="judul">Jenis Dokumen</label>
      <select class="form-control form-control-sm" name="kode" id="kode" >
        <option value="">Pilih Jenis Dokumen</option>
        <option value="1">Company Profile</option>
        <option value="2">Proposal</option>
        <option value="3">Laporan Keuangan</option>
      </select>
    </div>
    <div class="form-group" >
      <label for="file"> Pilih File</label>
      <input type="file" required name="file_docs" class="form-control-file" id="file">
    </div>
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
  {{-- <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script> --}}
