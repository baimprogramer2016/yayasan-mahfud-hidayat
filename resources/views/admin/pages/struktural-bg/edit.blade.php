<form action="{{ route('update-struktural-bg', $data->id) }}" method="POST">
    @csrf
 
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" required class="form-control" id="deskripsi" name="deskripsi" value="{{ $data->deskripsi }} ">
    </div>  
      <button type="button" class="btn-sm btn btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn-sm btn btn-primary">Ubah</button>
  </form>
