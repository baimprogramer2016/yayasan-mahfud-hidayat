@extends('admin.layouts.app')
@section('title-page','Program')
    

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Video Testimonial</h4>

            <div class="row-12">
              <div class="alert alert-warning">
                <p>*Buka Video Youtube , Klik Tombol Share -> Pilih Embed -> Copy URL yang ada tulisan Embed (Contoh :<b> https://www.youtube.com/embed/t6aRqf6obAY </b>)</p>
              </div>
            </div>
            <div class="row pl-3 pr-3">
                
              <div class="div ml-auto">
                <button  type="button" class="btn btn-sm btn-info btn-icon-text " data-toggle="modal" data-target="#exampleModal" onclick="viewTambah()">
                    <i class="bi bi-plus-lg"></i>                                               
                    Tambah Url
                </button>
              </div>
            </div>
            <div class="table-responsive pt-3">
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
             <table class="display expandable-table" width="100%">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Judul
                    </th>
                    <th>
                      Deskripsi
                    </th>
                   
                    <th>
                        Action
                    </th>
                 
                  </tr>
                </thead>
                <tbody>
                  @if($data != '')  
                  @foreach ($data as $key => $item)
                  <tr>
                    <td>
                      {{ $key + 1}}
                    </td>
                    <td>
                       {{ $item->judul }}
                    </td>
                   
                    <td>
                        {{ substr(strip_tags($item->url),0,50) }}
                    </td>
                    <td>
                        <a href='{{ route('delete-video-testimonial', $item->id) }}' class="btn btn-sm btn-inverse-danger btn-fw">Hapus</a>
                    </td>
                 
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan=5 class='text-center bg-inverse-danger'>Belum Ada Data</td>
                  </tr>
                  @endif
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-form">
           
        </div>
       
      </div>
    </div>
  </div>
@endsection

@push('script-bottom')

    <script>
        function viewTambah()
        {
        $.ajax({
            type: 'GET',
            url: "{{ route('tambah-video-testimonial') }}",
            success: function(response)
            {
                console.log(response)
                $("#modal-form").html("");
                $("#modal-form").html(response);
            }
        })
        }

     

    </script>
@endpush