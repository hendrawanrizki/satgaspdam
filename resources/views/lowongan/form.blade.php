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

<section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Apply for a job</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" class="form-control form-control-lg" placeholder="example@example.com" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" placeholder="Message sent to the employer"></textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Send application</button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- <h2>ISI DATA DIBAWAH INI</h2>

<form action="" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NAMA LENGKAP</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NO KTP</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">JENIS KELAMIN</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">STATUS PERNIKAHAN</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ALAMAT</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NO TELEPON</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">PENDIDIKAN TERAKHIR</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="formFile" class="form-label">PAS FOTO</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">CV</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">KTP</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">KK</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">NPWP</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">BPJS</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">SKCK</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">SURAT SEHAT</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">IJAZAH</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">SERTIFIKAT PENDUKUNG</label>
  <input class="form-control" type="file" id="formFile">
</div>
<input type="submit">
</form> -->

</body>

</html>