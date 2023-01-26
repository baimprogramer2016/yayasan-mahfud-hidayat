@extends('admin.layouts.app')
@section('title-page','Pendaftaran')
    

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pendaftaran Masuk</h4>
            
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
                      Nama Siswa
                    </th>
                    <th>
                      Kelas 
                    </th>
                    <th>
                      Sekolah
                    </th>
                    <th>
                      Nama Orang Tua
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Lihat Detail
                    </th>
                    <th>
                      Update Status
                    </th>
                 
                  </tr>
                </thead>
                <tbody>
                  @if($data != '')  
                  @foreach ($data as $item_siswa)
                  <tr>
                    <td>
                      #
                    </td>
                    <td>
                       {{ $item_siswa->nama_siswa }}
                    </td>
                    <td>
                      {{ $item_siswa->kelas }}
                    </td>
                    <td>
                      {{ $item_siswa->sekolah }}
                    </td>
                    <td>
                      {{ $item_siswa->nama_orang_tua }}
                    </td>
                    <td>
                     <button style="cursor:none" class="btn btn-sm btn-{{ $item_siswa->status_color }}" id="desc_{{ $item_siswa->id }}"> {{ $item_siswa->status_description }}</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-inverse-info btn-fw" data-toggle="modal" data-target="#exampleModal" onClick="viewDetail('{{ $item_siswa->id }}')">Lihat Detail</button>
                    </td>
                    <td>
                      <select class="form-control form-control-sm" name="status" id="status_{{ $item_siswa->id }}" onchange="updateStatus('{{ $item_siswa->id }}')">
                          <option value="{{ $item_siswa->status }}">{{ descStatus($item_siswa->status) }}</option>
                          <option value="N">Baru</option>
                          <option value="O">Dibaca</option>
                          <option value="P">Proses</option>
                          <option value="R">Dibatalkan</option>
                          <option value="D">Selesai</option>
                        </select>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
   
        <div class="modal-body" id="modal-form">
           
        </div>
       
      </div>
    </div>
  </div>
@endsection

@push('script-bottom')

    <script>

        function viewDetail(paramId)
        {
            var url     = '{{ route("pendaftaran-detail", ":id") }}';
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

        function updateStatus(paramId)
        {
          var status = $("#status_"+paramId).val();
          const desc = $("#desc_"+paramId);

          $.ajax({
            type: "POST",
            data: {
              status: status,
              id: paramId,
              "_token": "{{ csrf_token() }}",
            },
            url : "{{ route('pendaftaran-update-status') }}",
            success : function(response)
            {
              desc.html(response.description);
              desc.removeClass().addClass("btn btn-sm btn-"+response.desccolor);
            }
          })
        }
    </script>
@endpush