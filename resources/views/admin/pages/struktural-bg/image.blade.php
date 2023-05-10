<form action="{{ route('image-save-struktural-bg', $id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Pilih Gambar</label>
      <input type="file" required name="image" class="form-control-file" id="image">
    </div>
    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
</form>