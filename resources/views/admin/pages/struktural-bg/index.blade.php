@extends('admin.layouts.app')
@section('title-page','struktural-bg')
    

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Struktural Background</h4>
            <div class="row pl-3 pr-3">
                <p class="card-description">
                  Catatan : <code>Hanya ada Satu data</code>
                </p>
                <button @if($data != '') disabled @endif type="button" class="btn btn-sm btn-info btn-icon-text ml-auto" data-toggle="modal" data-target="#exampleModal" onclick="viewTambah()">
                    <i class="bi bi-plus-lg"></i>                                               
                    Tambah
                </button>
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
                      Deskripsi
                    </th>
                    <th>
                      Image
                    </th>
                    <th>
                        Action
                    </th>
                 
                  </tr>
                </thead>
                <tbody>
                  @if($data != '')  
                  <tr>
                    <td>
                      #
                    </td>
                  
                    <td>
                        {{ substr(strip_tags($data->deskripsi),0,50) }}
                    </td>
                    <td>
                       @if($data->image == null) 
                        <button type="button" class="btn btn-sm btn-inverse-warning btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewImage('{{ $data->id }}')">Upload</button>
                       @else 
                        <img  data-toggle="modal" width="50" data-target="#exampleModal" onClick="viewImage('{{ $data->id }}')" src="{{ asset("uploads/".($data->image ?? '')) }}" style="cursor:pointer" alt="Ubah Gambar"> 
                        
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-inverse-info btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewEdit('{{ $data->id }}')">Ubah</button>
                        <a href='{{ route('delete-struktural-bg', $data->id) }}' class="btn btn-sm btn-inverse-danger btn-fw">Hapus</a>
                    </td>
                 
                  </tr>
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
    <div class="modal-dialog modal-lg">
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
<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'deskripsi' );
</script>
    <script>

        function viewTambah()
        {
        $.ajax({
            type: 'GET',
            url: "{{ route('tambah-struktural-bg') }}",
            success: function(response)
            {
                console.log(response)
                $("#modal-form").html("");
                $("#modal-form").html(response);
            }
        })
        }

        function viewEdit(paramId)
        {
            var url     = '{{ route("edit-struktural-bg", ":id") }}';
            urlEdit     = url.replace(':id',paramId);

            {
                $.ajax({
                    type:"GET",
                    url:urlEdit,
                    success: function(response)
                    {
                        console.log(response)
                        $("#modal-form").html("");
                        $("#modal-form").html(response);
                    }
                })
            }  
        }

        function viewImage(paramId)
        {
            var url     = '{{ route("image-struktural-bg", ":id") }}';
            urlEdit     = url.replace(':id',paramId);

            {
                $.ajax({
                    type:"GET",
                    url:urlEdit,
                    success: function(response)
                    {
                        console.log(response)
                        $("#modal-form").html("");
                        $("#modal-form").html(response);
                    }
                })
            }  
        }
     

    </script>
@endpush