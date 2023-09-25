@auth
    {{-- Konten yang hanya dapat diakses setelah login --}}
@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <form method="POST" action="{{ route('uploadlowongan') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Judul Lowongan</label>
          <input type="text" name="judul_lowongan" class="form-control" id="" aria-describedby="" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Deskripsi Lowongan</label>
          <textarea name="deskripsi_lowongan" id="" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Tanggal Akhir</label>
            <input type="date" name="tanggal_akhir" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Penempatan</label>
            <input type="text" name="penempatan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Posisi Jabatan</label>
            <input type="text" name="posisi_jabatan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin Lowongan</label>
             <textarea name="jenis_kelamin" id="" cols="5" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">Pendidikan Lowongan</label>
            <input type="text" name="pendidikan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Jurusan Lowongan</label>
            <input type="text" name="jurusan" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Keterangan Lowongan</label>
            {{-- <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
            <textarea name="keterangan" id="" cols="5" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">Syarat Dokumen</label>
            {{-- <input type="text" name="syarat_dokumen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> --}}
            <textarea name="syarat_dokumen" id="" cols="5" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">Poster Lowongan</label>
            <input type="file" name="file" class="form-control" id="" aria-describedby="" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Kategori Lowongan</label>
            <select class="form-control" name="kategori_lowongan" aria-label="Default select example">
            <option selected>Pilih Kategori</option>
            @foreach($data as $post)
            <option value="{{$post->id}}">{{$post->nama_kategori}}</option>
            @endforeach
          </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <!-- /.content-wrapper -->

@include('admin.partials.footer')
@endauth