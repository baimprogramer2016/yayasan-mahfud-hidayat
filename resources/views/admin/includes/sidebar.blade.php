  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-dashboard') }}">
            <i class="bi bi-house mr-2"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
        <i class="bi bi-buildings mr-2"></i>
          <span class="menu-title">Profile Perusahaan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="profile">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('pendahuluan') }}">Pendahuluan</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('latar-belakang') }}">Latar Belakang</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#program" aria-expanded="false" aria-controls="program">
            <i class="bi bi-menu-app mr-2"></i>
          <span class="menu-title">Program</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="program">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('program') }}">Program</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#struktural" aria-expanded="false" aria-controls="struktural">
            <i class="bi bi-people mr-2"></i>
          <span class="menu-title">Struktural</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="struktural">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('struktural') }}">Struktural</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tim" aria-expanded="false" aria-controls="tim">
            <i class="bi bi-person-workspace mr-2"></i>
          <span class="menu-title">Tim</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tim">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('team') }}">Tim</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#galleri" aria-expanded="false" aria-controls="galleri">
            <i class="bi bi-aspect-ratio mr-2"></i>
            
          <span class="menu-title">Galleri</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="galleri">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('gallery') }}">Galleri</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#layanan" aria-expanded="false" aria-controls="layanan">
            <i class="bi bi-wrench-adjustable-circle mr-2"></i>
          <span class="menu-title">Pendaftaran</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="layanan">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('pendaftaran') }}"> Pendaftaran Masuk </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#videotestimonial" aria-expanded="false" aria-controls="videotestimonial">
            <i class="bi bi-youtube mr-2"></i>
          <span class="menu-title">Testimonial</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="videotestimonial">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('video-testimonial') }}"> Video </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#media-sosial" aria-expanded="false" aria-controls="media-sosial">
            <i class="bi bi-link mr-2"></i>
          <span class="menu-title">Update URL</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="media-sosial">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('update-url') }}"> Update URL </a></li>
            
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dokumen" aria-expanded="false" aria-controls="dokumen">
            <i class="bi bi-upload mr-2"></i>
          <span class="menu-title">Dokumen</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dokumen">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('dokumen') }}">Dokumen</a></li>
            
          </ul>
        </div>
      </li>
     
    </ul>
  </nav>