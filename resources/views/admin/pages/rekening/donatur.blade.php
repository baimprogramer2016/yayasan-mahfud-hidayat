@extends('admin.layouts.app')
@section('title-page','Donatur')
    

@section('content')

<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Nilai Donatur</h4>
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
            <form class="forms-sample" action="{{ route('donatur-simpan') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="judul">Nominal</label>
                <input type="number" class="form-control" id="nominal" name="nominal" placeholder="nominal" value="{{ $data->nominal }}">
              
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="aktif" id="aktif" {{ ($data->aktif == 1) ? 'checked' : '' }}>
                  Ditampilkan
                </label>
              </div>
            
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>

          </div>
        </div>
      </div>
</div>

@endsection
