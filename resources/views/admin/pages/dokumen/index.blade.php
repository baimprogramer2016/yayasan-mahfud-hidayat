@extends('admin.layouts.app')
@section('title-page','Dokumen')
    

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Upload Dokumen</h4>
            <div class="row pl-3 pr-3">
                
                <button type="button" class="btn btn-sm btn-info btn-icon-text ml-auto" data-toggle="modal" data-target="#exampleModal" onclick="viewTambah()">
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
                      Kode
                    </th>
                    <th>
                      Jenis Dokumen
                    </th>
                    <th>
                      File
                    </th>
                    <th>
                        Action
                    </th>
                 
                  </tr>
                </thead>
                <tbody>
                  @if($data != '')  
                  @foreach ($data as $item)
                  <tr>
                    <td>
                      #
                    </td>
                    <td>
                       {{ $item->kode }}
                    </td>
                 
                    <td>
                       {{ $item->nama }}
                    </td>
                 
                    <td class="text-center">
                      @if($item->FILE == null || $item->FILE == '') 
                      <button type="button" class="btn btn-sm btn-inverse-primary btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewFile('{{ $item->id }}')">Upload File</button>
                     @else 
                      <span class="btn btn-sm btn-inverse-success btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewFile('{{ $item->id }}')" style="cursor:pointer" alt="Ubah Gambar"> {{ $item->FILE }}<br>(Ubah File)</span>
                      @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-inverse-info btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewEdit('{{ $item->id }}')">Ubah Jenis</button>
                        <a href='{{ route('delete-dokumen', $item->id) }}' class="btn btn-sm btn-inverse-danger btn-fw">Hapus</a>
                    </td>
                 
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan=4 class='text-center bg-inverse-danger'>Belum Ada Data</td>
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
    <div class="modal-dialog">
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
            url: "{{ route('tambah-dokumen') }}",
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
            var url     = '{{ route("edit-dokumen", ":id") }}';
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

        function viewFile(paramId)
        {
            var url     = '{{ route("file-dokumen", ":id") }}';
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