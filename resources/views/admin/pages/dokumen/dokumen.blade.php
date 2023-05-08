<form action="{{ route('file-save-dokumen', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="file_docs">Pilih Untuk Ubah Gambar</label>
      <input type="file" required name="file_docs" class="form-control-file" id="file_docs">
    </div>
    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
</form>