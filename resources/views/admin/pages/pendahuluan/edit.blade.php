<form action="{{ route('update-pendahuluan', $data->id) }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control" name="judul" id="judul" value="{{ $data->judul }}" aria-describedby="judul">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea required class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $data->deskripsi }} </textarea>
    </div>  
      <button type="button" class="btn-sm btn btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn-sm btn btn-primary">Ubah</button>
  </form>
  <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script>
