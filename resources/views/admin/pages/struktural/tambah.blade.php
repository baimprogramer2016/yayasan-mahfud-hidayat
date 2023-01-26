<form action="{{ route('simpan-struktural') }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Nama</label>
      <input type="text" required class="form-control form-control-sm" name="nama" id="nama" aria-describedby="judul">
    </div>
    <div class="form-group" >
      <label for="jabatan">Jabatan</label>
      <input type="text" required class="form-control form-control-sm" name="jabatan" id="jabatan" aria-describedby="judul">
    </div>
    <div class="form-group">
        <label for="deskripsi">Kutipan</label>
        <textarea required class="form-control form-control-sm" name="kutipan" rows="2"></textarea>
    </div>  
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
  {{-- <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script> --}}
