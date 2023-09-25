@auth
    {{-- Konten yang hanya dapat diakses setelah login --}}
@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengumuman</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengumuman</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pengumuman</h3>
       
        <div class="card-tools">
            <i class="bi bi-plus-circle"></i> <a href="/tambahpengumuman" class="btn btn-primary">Tambah Pengumuman</a>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th class="text-left">No</th>
                    <th class="text-left">Nama Pengumuman</th>
                    <th class="text-center">Deskripsi Pengumuman</th>
                    <th class="text-center">Nama Lowongan</th>
                    <th class="text-center">Tanggal Seleksi</th>
                    <th class="text-center">Lokasi Seleksi</th>
                    <th class="text-center">File</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $post) 
                <tr>
                 
                    <td>
                    {{$post->id}}
                    </td>
                    <td>
                      {{$post->nama_pengumuman}}
                    </td>
                    <td>
                      {{$post->deskripsi}}
                    </td>
                    <td></td>
                    <td>
                      {{$post->tanggal_seleksi}}
                    </td>
                    <td>
                      {{$post->lokasi_seleksi}}
                    </td>
                    <td>
                      {{$post->file}}
                    </td>
                    {{-- <td>
                      {{$post->nama_pengumuman}}
                    </td> --}}
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin.partials.footer')
@endauth