<form action="{{ route('update-gallery', $data->id) }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control" name="judul" id="judul" value="{{ $data->judul }}" aria-describedby="judul">
    </div>
  
      <button type="button" class="btn-sm btn btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn-sm btn btn-primary">Ubah</button>
  </form>
 
