@include('partials.header')
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <h2>Pengumuman Lowongan</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>Pengumuman Lowongan</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <section class="content-info">
    <div class="container paddings-mini">
       <div class="row">
          <div class="col-lg-12">
             <table class="table-striped table-responsive table-hover result-point">
                <thead class="point-table-head">
                   <tr>
                      <th class="text-left">No</th>
                      <th class="text-left">Nama Pengumuman</th>
                      <th class="text-center">Deskripsi Pengumuman</th>
                      <th class="text-center">Nama Lowongan</th>
                      <th class="text-center">Tanggal Seleksi</th>
                      <th class="text-center">Lokasi Seleksi</th>
                      <th class="text-center">Nama Peserta</th>
                      <th class="text-center">Aksi</th>

                   </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $post) 
                   <tr>
                      <td class="text-left number">{{$post->id}} <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                      <td class="text-left">
                        <span>{{$post->nama_pengumuman}}</span>
                      </td>
                      <td>{{$post->deskripsi}}</td>
                      <td>{{$post->judul_lowongan}}</td>
                      <td>{{$post->tanggal_seleksi}}</td>
                      <td>{{$post->lokasi_seleksi}}</td>
                      <td>{{$post->nama_lengkap}}</td>
                      <td>
                        <button class="btn btn-primary">Detail</button>
                      </td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
    
 </section>

@include('partials.footer')