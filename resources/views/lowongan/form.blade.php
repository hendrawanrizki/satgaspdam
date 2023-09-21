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

<section class="vh-200" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Form Data Diri</h1>

        <form  method="POST" action="{{ route('tambahdata', ['id'=>$id]) }}">
          @csrf
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Nama Lengkap</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="nama_lengkap" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">No KTP</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="no_ktp" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Tempat Lahir</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="tempat_lahir" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Tanggal Lahir</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="date" name="tanggal_lahir" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Jenis Kelamin</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="jenis_kelamin" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Status Pernikahan</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="status_pernikahan" class="form-control form-control-lg" placeholder="" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Alamat</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" name="alamat" rows="3" placeholder="Isikan Alamat Lengkap"></textarea>

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Telepon</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="telpon" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Pendidikan Terakhir</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="pendidikan_terakhir" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Upload CV</h6>
              </div>
              <div class="col-md-9 pe-5"> 
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="cv"/>
                <div class="small text-muted mt-2">Upload CV dalam bentuk PDF (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">KTP</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="ktp"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)/div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">KK</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="kk"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">NPWP</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="npwp"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">BPJS</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="bpjs"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">SKCK</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="skck"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">SURAT SEHAT</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="surat_sehat"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">FOTO</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="foto"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">SERTIFIKAT</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="sertifikat"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">IJAZAH</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="ijazah"/>
                <div class="small text-muted mt-2">Upload format .jpg/.png (max 1MB)</div>
              </div>
            </div>

            
            <hr class="mx-n3">
            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Kirim Data</button>
            </div>
          </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</section>

@include('partials.footer')

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