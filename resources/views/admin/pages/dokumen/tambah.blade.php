<form action="{{ route('simpan-dokumen') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="judul">Keterangan Dokument</label>
      <input type="hidden" required name="kode" class="form-control" id="kode" value=0>
      <input type="text" required name="nama" class="form-control" id="nama">
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
