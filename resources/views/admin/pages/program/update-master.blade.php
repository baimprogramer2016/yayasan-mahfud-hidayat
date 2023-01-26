<form action="{{ route('simpan-program-master') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control form-control-sm" name="judul" id="judul" aria-describedby="judul" value="{{ $datamaster->judul ?? ''}}">
    </div>
    
    <div class="form-group" >
      <label for="image"><img width="50" src="{{ asset("uploads/".($datamaster->image ?? '')) }}" alt=""> <code><b>* Kosongkan Jika tidak Ada Image</b></code></label>
      <input type="file" name="image" class="form-control-file" id="image">
    </div>
    
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea required class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="3">
          {{ $datamaster->deskripsi ?? ''}}
        </textarea>
    </div>  
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
  <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script>
