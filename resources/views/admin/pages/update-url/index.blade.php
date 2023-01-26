@extends('admin.layouts.app')
@section('title-page','Update URL')
    

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update URL</h4>
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
            <form class="forms-sample" action="{{ route('store-url') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @foreach ($dataurl as $item_url)
              <div class="form-group">
                <label for="youtube">{{ Ucwords($item_url->nama) }}</label>
                <input type="text" class="form-control" id="{{ $item_url->nama }}" name="{{ $item_url->nama }}" placeholder="Url" value="{{ $item_url->url }}">
              </div>
              @endforeach
            
              <div class="form-group">
                <label for="youtube">Logo</label>
                <input  type="file" class="form-control w-2 " id="image" name="image" placeholder="Url"  value=""><img class="mt-3" width="50" src="{{ asset("images/".($dataurllogo->url ?? '')) }}" alt="">
              </div>
            
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>

          </div>
        </div>
      </div>
</div>

@endsection
