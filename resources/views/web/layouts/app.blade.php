<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MHI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @stack('style-up')
  @include('web.includes.link-up')
  @stack('style-bottom')

  <!-- =======================================================
  * Template Name: Bootslander - v4.10.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('web.includes.navbar')
  <!-- End Header -->

  <!-- ======= Main ======= -->
  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('web.includes.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <a target="_blank" href="{{ $provider_url_wa }}" class="act-btn">
    <img  width="50" src="{{ asset('images/wa.png') }}" alt="">
  </a>

  @stack('script-up')
  @include('web.includes.link-bottom')
  @stack('script-bottom')

</body>

</html>