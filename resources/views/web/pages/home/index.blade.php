@extends('web.layouts.app')

@section('content')

@include('web.pages.home.baner')

<main id="main">

  @include('web.pages.home.pendahuluan')
  @include('web.pages.home.program')
  @include('web.pages.home.struktural')
  @include('web.pages.home.team')
  @include('web.pages.home.lainlain')
  @include('web.pages.home.gallery')
  @include('web.pages.home.pendaftaran')
  {{-- @include('web.pages.home.about')
  @include('web.pages.home.counts')
  @include('web.pages.home.details')
  
  @include('web.pages.home.pricing')
  @include('web.pages.home.faq') --}}
  @include('web.pages.home.contact')


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
