
@include('partials.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="container position-relative" >
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <!-- <h2>Welcome to <span>Impact</span></h2> -->
          <h2>SATGAS KELOLA PEGAWAI NON TETAP</h2>
          <h3>PDAM SURYA SEMBADA SURABAYA</h3>
          <p>Sistem Informasi untuk lowongan pegawai non tetap, magang, dan penelitian<p>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative" >
      <div class="container position-relative">
        <div class="row gy-4 mt-5" >  
          @foreach ($data as $post)      
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-workspace"></i></div>
              <h4 class="title"><a href="/kategorilowonganuser/{{$post->id}}" class="stretched-link">{{$post->nama_kategori}}</a></h4>
            </div>
          </div>
          @endforeach
          <!--End Icon Box -->
{{--
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-archive"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Permagangan</a></h4>
            </div>
          </div> --}}
          <!--End Icon Box -->

          {{-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-wrench"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Penelitian</a></h4>
            </div>
          </div> --}}
          <!--End Icon Box -->

          <!-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div>End Icon Box -->

        </div>
      </div>
    </div>
    </div>
  </section>
  @include('partials.footer')