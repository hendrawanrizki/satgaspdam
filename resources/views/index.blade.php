
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
      
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>KETENTUAN UMUM</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6">
          <div class="service-item  position-relative">
            <div class="icon">
              <h1>1</h1>
            </div>
            {{-- <h3>Setiap pelamar hanya diperbolehkan mendaftar maksimal 1 posisi dari keseluruhan BUMN.</h3> --}}
             <p>Setiap pelamar hanya diperbolehkan mendaftar <strong> maksimal 1 posisi di PDAM Surabaya.</strong></p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <h1>2</h1>
            </div>
            {{-- <h6>Seluruh tahapan rekrutmen tidak dipungut biaya apapun. Apabila ada pihak yang meminta biaya/ menjanjikan sesuatu/ menawarkan bantuan atas proses rekrutmen dapat melapor ke Forum Human Capital Indonesia (FHCI).</h6> --}}
            <p>Seluruh tahapan rekrutmen tidak dipungut biaya apapun. Apabila ada pihak yang meminta biaya/ menjanjikan sesuatu/ menawarkan bantuan atas proses rekrutmen dapat melapor ke Satgas PDAM Surabaya.</p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <h1>3</h1>
            </div>
            {{-- <h3>Ledo Markt</h3> --}}
            <p>Seluruh biaya akomodasi dan transportasi selama proses rekrutmen dan seleksi menjadi tanggungan pelamar.</p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <h1>4</h1>
            </div>
            {{-- <h3>Asperiores Commodit</h3> --}}
            <p>Hasil keputusan Satgas PDAM Surabaya bersifat final, mengikat, dan tidak dapat diganggu gugat.</p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <h1>5</h1>
            </div>
            {{-- <h3>Velit Doloremque</h3> --}}
            <p>Seluruh kegiatan seleksi offline dan pengumuman tiap tahapan seleksi diumumkan melalui https://rekrutmenbersama.fhcibumn.id</p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
             <h1>6</h1>
            </div>
            {{-- <h3>Dolori Architecto</h3> --}}
            <p>Seluruh Pelamar diwajibkan mengajukan lamaran dengan melakukan mengisi data pribadi dan dokumen pribadi melalui website https://rekrutmenbersama.fhcibumn.id</p>
            {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Our Services Section -->

   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3>Tata Cara <strong>Melamar Lowongan</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>
        </div>

        <div class="col-lg-8">

          <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <span class="num">1.</span>
                  Pelamar hanya dapat melamar melalui situs website
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Pelamar hanya dapat melamar melalui situs web https://rekrutmenbersama.fhcibumn.id dengan mengikuti petunjuk pendaftaran. Tidak ada jalur lain yang digunakan untuk pengiriman lamaran.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <span class="num">2.</span>
                  Pelamar wajib mengisi data pribadi dalam mengikuti proses seleksi
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Pelamar wajib memiliki alamat e-mail pribadi dan nomor telepon seluler yang masih aktif untuk dapat mengikuti proses seleksi. Pelamar dilarang menggunakan alamat e-mail milik orang lain/kantor dalam proses pendaftaran.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <span class="num">3.</span>
                  Pelamar wajib mengisi dokumen pribadi dalam mengikuti proses seleksi
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <span class="num">4.</span>
                  Tidak ada layanan untuk perubahan/koreksi seluruh data-data serta dokumen yang telah dikirim oleh pelamar.
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <span class="num">5.</span>
                  Untuk memudahkan registrasi online, persiapkan terlebih dahulu beberapa dokumen ini.
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  <section class="content-info">
                    <div class="container paddings-mini">
                       <div class="row">
                          <div class="col-lg-12">
                           <strong> <small>Dokumen Pegawai Non-Tetap:</small></strong><br>
                             <table class="table-striped table-responsive table-hover result-point">
                                <thead class="point-table-head">
                                   <tr>
                                      <th class="text-center">No</th>
                                      <th class="text-center">Nama Dokumen</th>
                                      <th class="text-center">Status</th>
                                    
                                   </tr>
                                </thead>
                                <tbody class="text-center">
                                   <tr>
                                      <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                      <td>Upload CV</td>
                                  <td>Wajib</td>
                                      
                                   </tr>
                                   <tr>
                                    <td class="text-left number">2 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                    <td>KTP</td>
                                <td>Wajib</td>
                                    
                                 </tr>
                                 <tr>
                                  <td class="text-left number">3 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                  <td>Kartu Keluarga</td>
                              <td>Wajib</td>
                                  
                               </tr>
                               <tr>
                                <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                <td>NPWP</td>
                            <td>Wajib</td>
                                
                             </tr>
                             <tr>
                              <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                              <td>BPJS</td>
                          <td>Wajib</td>
                              
                           </tr>
                          
                                   
                         
                                </tbody>
                             </table>
                          </div>
                       </div>
                    </div>
                    
                 </section>
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <section class="experience pt-100 pb-100" id="experience">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>Alur Pendaftaran Lowongan</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
               <div class="col-xl-12">
                  <ul class="timeline-list">
                     <!-- Single Experience -->
                     <li>
                      <div class="timeline_content">
                         <span>Step 1</span>
                         <h4>Tahap Pilih Lowongan</h4>
                         <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                      </div>
                   </li>
                     <li>
                        <div class="timeline_content">
                           <span>Step 2</span>
                           <h4>Tahap Pengumpulan Berkas Lowongan</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>Step 3</span>
                           <h4>Tahap Seleksi Lowongan</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>Step 4</span>
                           <h4>Tahap Hasil Lowongan</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                   
                  </ul>
               </div>
            </div>
		</div>
	  </section>
  @include('partials.footer')