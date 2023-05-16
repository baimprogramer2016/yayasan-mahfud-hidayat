@extends('admin.layouts.app')
@section('title-page','Update URL')
    

@section('content')

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Rekening</h4>
            <div class="row pl-3 pr-3">
            </div>
            @if(session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('pesan') }}
            </div>
            @endif
            @if(session()->has('pesan_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('pesan_error') }}
                </div>
            @endif
            <form class="forms-sample" action="{{ route('rekening-simpan') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="judul">Keterangan</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{ $data->judul }}">
              </div>
              <div class="form-group">
                <label for="judul2">Nama Bank 1</label>
                <input type="text" class="form-control" id="nama_bank1" name="nama_bank1" placeholder="Nama Bank 1" value="{{ $data->nama_bank1 }}">
              </div>
              <div class="form-group">
                <label for="nomor_rekening">Rekening 1 </label>
                <input type="text" class="form-control" id="nomor_rekening1" name="nomor_rekening1" placeholder="Nomor Rekening 1" value="{{ $data->nomor_rekening1 }}">
              </div>
              <div class="form-group">
                <label for="atas_nama">Atas Nama 1</label>
                <input type="text" class="form-control" id="atas_nama1" name="atas_nama1" placeholder="Atas Nama1" value="{{ $data->atas_nama1 }}">
              </div>
              <div class="form-group">
                <label for="judul2">Nama Bank 2</label>
                <input type="text" class="form-control" id="nama_bank2" name="nama_bank2" placeholder="Nama Bank 2" value="{{ $data->nama_bank2 }}">
              </div>
              <div class="form-group">
                <label for="nomor_rekening">Rekening 2 </label>
                <input type="text" class="form-control" id="nomor_rekening2" name="nomor_rekening2" placeholder="Nomor Rekening 2" value="{{ $data->nomor_rekening2 }}">
              </div>
              <div class="form-group">
                <label for="atas_nama">Atas Nama 2</label>
                <input type="text" class="form-control" id="atas_nama2" name="atas_nama2" placeholder="Atas Nama 2" value="{{ $data->atas_nama2 }}">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>

          </div>
        </div>
      </div>
</div>

@endsection
