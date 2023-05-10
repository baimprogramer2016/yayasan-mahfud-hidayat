<form action="{{ route('simpan-struktural-bg') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" required class="form-control form-control-sm" id="deskripsi" name="deskripsi">
    </div>  
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
