<form action="{{ route('simpan-program') }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control form-control-sm" name="judul" id="judul" aria-describedby="judul">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea required class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>  
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
  <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script>
