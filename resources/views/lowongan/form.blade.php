@include('partials.header')
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Form Data Diri</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>Form Data Diri</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->
<section class="vh-200" style="background-color: #edebeb;">
  
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        {{-- <h1 class="text-white mb-4">Form Data Diri</h1> --}}

        <form  method="POST" action="{{ route('tambahdata', ['id' => $id]) }}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $id }}">
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

                {{-- <input type="text" name="jenis_kelamin" class="form-control form-control-lg" /> --}}
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Agama</h6>

              </div>
              <div class="col-md-9 pe-5">

                {{-- <input type="text" name="jenis_kelamin" class="form-control form-control-lg" /> --}}
                <select class="form-select" name="agama" aria-label="Default select example">
                  <option selected>Pilih Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                </select>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Status Pernikahan</h6>

              </div>
              <div class="col-md-9 pe-5">

                {{-- <input type="text" name="status_pernikahan" class="form-control form-control-lg" placeholder="" /> --}}
                <select class="form-select" name="status_pernikahan" aria-label="Default select example">
                  <option selected>Pilih Status Pernikahan</option>
                  <option value="Lajang">Lajang</option>
                  <option value="Nikah">Nikah</option>
                </select>
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

                <h6 class="mb-0">Email</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="email" class="form-control form-control-lg" />

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
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Sekolah</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="sekolah" class="form-control form-control-lg" />

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Jurusan</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="jurusan" class="form-control form-control-lg" />

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