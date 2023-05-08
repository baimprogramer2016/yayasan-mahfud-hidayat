@extends('web.layouts.app')

@section('content')

@include('web.pages.baner')

<main id="main">

  @include('web.pages.pendahuluan')
  @include('web.pages.program')
  @include('web.pages.struktural')
  @include('web.pages.team')
  @include('web.pages.video-testimonial')
  @include('web.pages.dokumen')
  @include('web.pages.gallery')
  @include('web.pages.pendaftaran')
  {{-- @include('web.pages.about')
  @include('web.pages.counts')
  @include('web.pages.details')
  
  @include('web.pages.pricing')
  @include('web.pages.faq') --}}
  @include('web.pages.contact')


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      
      <div class="modal-body" id="modal-view">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</main>
    
@endsection

@push('script-bottom')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function viewPendahuluan()
       
        {
        $.ajax({
            type: 'GET',
            url: "{{ route('view-pendahuluan') }}",
            success: function(response)
            {
                $("#modal-view").html("");
                $("#modal-view").html(response);
            }
        })
        }
        function viewLatarBelakang()
        {
        $.ajax({
            type: 'GET',
            url: "{{ route('view-latar-belakang') }}",
            success: function(response)
            {
                $("#modal-view").html("");
                $("#modal-view").html(response);
            }
        })
        }
    </script>
    
@endpush
