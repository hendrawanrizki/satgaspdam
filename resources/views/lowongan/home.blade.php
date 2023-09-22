@include('partials.header')
<h1 class="text-center mb-4 mt-3">Daftar Lowongan </h1>
<div class="container">
<div class="row mt-5 mb-4" style="margin-left: 20px;">
  @foreach ($data as $post) 
  <div class="col-sm-6">  
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">{{$post->judul_lowongan}}</h2>
        <h6 class="card-text">{{$post->deskripsi_lowongan}}</h6>
        <p class="card-text">
        <h6>Penempatan : {{$post->penempatan}}</h6>
        <h6>Terakhir ditutup : {{$post->tanggal_akhir}}</h6>
    </p>
    <a href="/lowonganuser/{{$post->id}}" class="btn btn-primary">Lamar Lowongan</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
@include('partials.footer')