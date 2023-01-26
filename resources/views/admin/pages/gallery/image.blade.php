<form action="{{ route('image-save-gallery', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <img width="100" src="{{ asset("uploads/".($data->image)) }}" alt="">
    </div>
    <div class="form-group">
      <label for="image">Pilih Untuk Ubah Gambar</label>
      <input type="file" required name="image" class="form-control-file" id="image">
    </div>
    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
</form>