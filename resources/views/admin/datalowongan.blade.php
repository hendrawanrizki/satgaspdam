@auth
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
            <h1>Data Lowongan Pekerjaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Lowongan Pekerjaan</li>
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
          <h3 class="card-title">Data Lowongan Pekerjaan</h3>

          <div class="card-tools">
            <a href="/tambahlowongan" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Lowongan</a>
            {{-- <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">
              Tambah Data
            </button> --}}
            {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> --}}
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No.
                      </th>
                      <th style="width: 20%">
                          Judul Lowongan
                      </th>
                      <th style="width: 30%">
                         Deskripsi Lowongan
                      </th>
                      <th style="width: 30%">
                        Tanggal Awal
                     </th>
                      <th style="width: 30%">
                          Tanggal Akhir
                      </th>
                      <th style="width: 30%">
                       Penempatan
                    </th>
                    <th style="width: 30%">
                      Kategori Lowongan
                  </th>
                      <th style="width: 20%">
                        Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($data as $post)   
                <tr>
                  
                      <td>
                        {{ $post->id}}
                      </td>
                      <td>
                          <a>
                            {{ $post->judul_lowongan}}
                          </a>
                          <br/>
                      </td>
                      <td>
                          <a>
                            {{ $post->deskripsi_lowongan}}
                          </a>
                      </td>
                      <td>
                        <a>
                          {{ $post->tanggal_mulai}}
                        </a>
                      </td>
                      <td>
                        {{ $post->tanggal_akhir}}
                      </td>
                      <td> {{ $post->penempatan}}</td>
                      <td> {{ $post->nama_kategori}}</td>
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