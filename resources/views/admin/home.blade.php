@auth
    {{-- Konten yang hanya dapat diakses setelah login --}}
@include('admin.partials.header')

@include('admin.partials.navbar')

@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<h1>Selamat Datang</h1>
  </div>
  <!-- /.content-wrapper -->

@include('admin.partials.footer')
@endauth