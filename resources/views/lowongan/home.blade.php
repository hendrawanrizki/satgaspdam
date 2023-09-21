<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SATGAS PDAM SURABAYA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('partials.header')

<h1 class="text-center mb-4 mt-3">Daftar Lowongan </h1>

<!-- <h2>LIST LOWONGAN YANG TERSEDIA</h2>

<div id="" class="card w-30 mb-3">
  <div class="card-body">
    <h4 class="card-title">LOWONGAN TSI PDAM SURYA SEMBADA SURABAYA</h4>
   <span>Deskripsi</span>
    <p class="card-text">
        <h6>Penempatan : Surabaya</h6>
        <h6>Terakhir ditutup : 30 September 2023</h6>
    </p>
    <a href="/formlowongan" class="btn btn-primary">Apply Lowongan</a>
  </div>
</div> -->
<div class="row mt-5 mb-4" style="margin-left: 20px;">
  
  <div class="col-sm-6">
    @foreach ($data as $post)
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">{{$post->judul_lowongan}}</h2>
        <h6 class="card-text">{{$post->judul_lowongan}}</h6>
        <p class="card-text">
          <h6>Penempatan : {{$post->penempatan}}</h6>
          <h6>Terakhir ditutup : {{$post->tanggal_akhir}}</h6>
        </p>
          <a href="/lowonganuser/{{$post->id}}" class="btn btn-primary">Lamar Lowongan</a>
      </div>
    </div>
    @endforeach
  </div>
  
  <!-- <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div> -->
</div>

@include('partials.footer')


</html>