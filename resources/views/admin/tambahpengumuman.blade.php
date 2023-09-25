@auth
    {{-- Konten yang hanya dapat diakses setelah login --}}
@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Nama Pengumuman</label>
          <input type="text" name="judul_lowongan" class="form-control" id="" aria-describedby="" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Deskripsi Pengumuman</label>
          <textarea name="deskripsi_lowongan" id="" cols="5" rows="5" class="form-control"></textarea>
        </div>
          <div class="form-group">
            <label for="">Tanggal Seleksi</label>
            <input type="date" name="tanggal_akhir" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Lokasi</label>
            <input type="text" name="penempatan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">File Lowongan</label>
            <input type="file" name="posisi_jabatan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="">Nama Lowongan</label>
            <select class="form-control" name="kategori_lowongan" aria-label="Default select example">
            <option selected>Pilih Nama Lowongan</option>
            {{-- @foreach($data as $post)
            <option value="{{$post->id}}">{{$post->nama_kategori}}</option>
            @endforeach --}}
          </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <!-- /.content-wrapper -->

@include('admin.partials.footer')
@endauth