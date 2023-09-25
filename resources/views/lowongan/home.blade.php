@include('partials.header')
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Lowongan</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>Lowongan</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

<section id="services" class="services sections-bg" style="background-color: #f0f0f0;">
  <div class="container">
  <div class="row gy-4">
  @foreach($data as $posts)
  <div class="col-lg-4 col-md-6">
    <div class="card">
      <div class="card-body">
      <div class="icon">
        <i class="bi bi-activity"></i>
      </div>
      <h3>{{$posts->judul_lowongan}}</h3>
      <div class="d-flex justify-content-between">
      <div class="text-left">
        <!-- Teks kiri -->
      <small> <b> Tanggal Mulai : <i class="bi bi-alarm"></i></b> {{$posts->tanggal_mulai}}</small>
    </div>
    <div class="text-right">
        <!-- Teks kanan -->
      <small> <b> Berakhir s.d :  <i class="bi bi-alarm"></i> </b> {{$posts->tanggal_akhir}}</small>
    </div>
  </div>
      <p>{{$posts->deskripsi_lowongan}}</p>
      <span> <b> Penempatan:</b> {{$posts->penempatan}}</span><br>
      <span> <b> Posisi Jabatan:</b> {{$posts->posisi_jabatan}}</span><br>
      <a href="/lowonganuser/{{$posts->id}}" class="readmore stretched-link">Lamar <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
  </div><!-- End Service Item -->
@endforeach
</div>
</div>
</section>
@include('partials.footer')