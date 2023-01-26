<form action="{{ route('update-struktural', $data->id) }}" method="POST">
    @csrf
    <div class="form-group" >
      <label for="judul">Nama</label>
      <input type="text" required class="form-control" name="nama" id="nama" value="{{ $data->nama }}" aria-describedby="nama">
    </div>
    <div class="form-group" >
      <label for="judul">Jabatan</label>
      <input type="text" required class="form-control" name="jabatan" id="jabatan" value="{{ $data->jabatan }}" aria-describedby="jabatan">
    </div>
    <div class="form-group">
        <label for="deskripsi">Kutipan</label>
        <textarea required class="form-control" id="kutipan" name="kutipan" rows="3">{{ $data->kutipan }} </textarea>
    </div>  
      <button type="button" class="btn-sm btn btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn-sm btn btn-primary">Ubah</button>
  </form>
 
