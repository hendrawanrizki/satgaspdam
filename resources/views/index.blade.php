
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
  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Lowongan</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
 @foreach($data as $posts)
        <div class="col-lg-4 col-md-6">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <h3>{{$posts->judul_lowongan}}</h3>
            <p>{{$posts->deskripsi_lowongan}}</p>
            <span> <b> Penempatan:</b> {{$posts->penempatan}}</span><br>
            <small> <b> Tanggal ditutup:</b> {{$posts->tanggal_akhir}}</small> <br>
            <a href="/lowonganuser/{{$posts->id}}" class="readmore stretched-link">Lamar <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->
@endforeach
        {{-- <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>Eosle Commodi</h3>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <h3>Ledo Markt</h3>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <h3>Asperiores Commodit</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <h3>Velit Doloremque</h3>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <h3>Dolori Architecto</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item --> --}}

      </div>

    </div>
  </section><!-- End Our Services Section -->
  @include('partials.footer')