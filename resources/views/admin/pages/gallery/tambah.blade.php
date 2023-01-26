<form action="{{ route('simpan-gallery') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="judul">Judul</label>
      <input type="text" required class="form-control form-control-sm" name="judul" id="judul" aria-describedby="judul">
    </div>
    <div class="form-group" >
      <label for="image"><img width="50" src="uploads/{{ $datamaster->image ?? '' }}" alt=""> Pilih Gambar</label>
      <input type="file" required name="image" class="form-control-file" id="image">
    </div>
      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </form>
  {{-- <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'deskripsi' );
  </script> --}}
