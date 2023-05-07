<form action="{{ route('simpan-video-testimonial') }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control form-control-sm" name="judul" id="judul" aria-describedby="judul">
    </div>
    <div class="form-group">
        <label for="url">Url</label>
        <input type="text" required class="form-control form-control-sm" name="url" id="url" aria-describedby="url">
    </div>  
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>

