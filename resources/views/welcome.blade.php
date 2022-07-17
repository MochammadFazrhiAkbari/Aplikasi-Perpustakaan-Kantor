<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>I SHELTER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template/img/indocement.png')}}" rel="icon">
  <link href="{{asset('template/img/indocement.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/boxicons/css/boxicons.min.cs')}}s" rel="stylesheet">
  <link href="{{asset('template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">I SHELTER<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!--
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
          -->
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <!--<li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="peminjam">Book</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login') }}" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
              <h1>I SHELTER<span></span></h1>
              <h2>INDOCEMENT SHE LEARNING CENTER</h2>
            </div>
          </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About Us</h2>
          </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('template/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h4>I SHELTER </h4>
            <p class="fst-italic">
                pusat pelatihan yang fokus pada pelatihan mengenai keselamatan kerja dan lingkungan untuk karyawan dan kontraktor Indocement.
            </p>
            <ul>
                <h3>K3</h3>
                <li><i class="ri-check-double-line"></i>KEAMANAN</li>
                <li><i class="ri-check-double-line"></i>KESEHATAN</li>
                <li><i class="ri-check-double-line"></i>KESELAMATAN</li>
              </ul>
              <p>
                Dengan berdirinya I-SHELTER di tiga kompleks pabrik Indocement diharapkan mampu untuk menyelaraskan pemahaman pada budaya keselamatan Indocement, termasuk di dalamnya mencakup prinsip, panduan, prosedur keselamatan, kesehatan kerja, dan lingkungan
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <!--<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2></h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Gallery</h2>

          <p>Check our Gallery</p>
        </div>


        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Profile</li>
                <li data-filter=".filter-card">Training</li>
                <li data-filter=".filter-web">Library</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/profile 1.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Profile 1</h4>
                  <p>Profile</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/profile 1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/library 1.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Library 1</h4>
                  <p>Library</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/library 1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/profile 2.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Profile 2</h4>
                  <p>Profile</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/profile 2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/training 1.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Training 1</h4>
                  <p>Training</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/training 1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/library 2.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Library 2</h4>
                  <p>Library</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/library 2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/profile 3.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Profile 3</h4>
                  <p>Profile</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/profile 3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/training 2.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Training 2</h4>
                  <p>Training</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/training 2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/training 3.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Training 3</h4>
                  <p>Training</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/training 3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset('template/img/portfolio/library 4.png')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Library 3</h4>
                  <p>Library</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/img/portfolio/library 4.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur utama.jpg')}}" class="testimonial-img" alt="">
                  <h3>Christian Kartawijaya</h3>
                  <h4>Direktu Utama</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Indonesia, usia 55 tahun. Beliau menjabat sebagai Direktur Utama Perseroan sejak 1 Mei 2014. Meraih gelar Sarjana Teknik Sipil dari Universitas Trisakti, Magister Administrasi Bisnis dari San Diego University, dan Master of Arts in Christian Education (M.A.C.E) dari Fort Worth, Texas. Sebelumnya, beliau pernah menjabat sebagai Deputi Direktur Keuangan dan Diretur Keuangan Indocement. Saat ini, beliau juga menjabat sebagai Komisaris Utama dan Komisaris di Entitas Anak Perseroan. Beliau memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>

                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/wakil direktur.jpg')}}" class="testimonial-img" alt="">
                  <h3>Benny S. Santoso</h3>
                  <h4>Wakil Direktur Utama</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Indonesia, usia 64 tahun. Beliau menjabat sebagai Wakil Direktur Utama Perseroan sejak 8 Juli 2021. Meraih gelar Diploma Bisnis dari Ngee Ann Collage. Sebelumnya, beliau pernah menjabat sebagai Direktur Indofood Agri Resources Ltd. dan Komisaris Utama PT Indoritel Makmur Internasional Tbk. Saat ini, beliau juga menjabat sebagai Direktur Indofood Agri Resources Ltd. dan Komisaris Utama PT Indoritel Makmur Internasional Tbk. Beliau tidak memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>

                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur 1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Hasan Imer</h3>
                  <h4>Direktur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Turki, usia 68 tahun. Beliau menjabat sebagai Direktur Perseroan sejak 1 September 2008. Meraih gelar Sarjana Sains jurusan Teknis dari Yildiz Technical University. Sebelumnya, beliau pernah menjabat sebagai Manajer Proyek dan Investasi Akpansa's Qanakkale Plant dan Koordinator Wilayah Asia di HeidelbergCement Technology Center. Saat ini, beliau juga menjabat sebagai Direktur PT Pama Indo Mining (Entitas Anak Perseroan). Beliau memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur 2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Ramakanta Bhattacharjee</h3>
                  <h4>Direktur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Bangladesh, usia 56 tahun. Beliau menjabat sebagai Direktur Perseroan sejak 27 November 2012. Meraih gelar Sarjana Sains jurusan Elektrikal dan Teknik Elektro dari Chittagong University, Magister Administrasi Bisnis dari Southeastern University, dan Post Graduate Diploma dari Columbia Business School. Sebelumnya, beliau pernah menjabat sebagai Deputy Managing Director HeidelbergCement Bangladesh Ltd. Saat ini, beliau juga menjabat sebagai Direktur Utama PT Mandiri Sejahtera Sentera dan PT Tarabatuh Manunggal (keduanya adalah Entitas Anak). Beliau memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur 3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Troy Dartojo Soputro</h3>
                  <h4>Direktur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Indonesia, usia 57 tahun. Beliau menjabat sebagai Direktur Perseroan sejak 4 Desember 2015. Meraih gelar Sarjana Teknik Sipil dari Universitas Atma Jaya Yogyakarta, Magister Administrasi Bisnis dari University of Portland. Sebelum, beliau pernah menjabat sebagai Logistik Division Manager dan Sales and Marketing Division Manager Indocement. Saat ini, beliau juga menjabat sebagai Komisaris Utama dan Komisaris di Entitas Anak Perseroan. Beliau tidak memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur 3.jpg')}}" class="testimonial-img" alt="">
                  <h3>David Jonathan Clarke</h3>
                  <h4>Direktur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Inggris, usia 48 tahun. Beliau menjabat sebagai Direksi Perseroan sejak 1 Januari 2017. Meraih Sarjana Sains jurusan Ekonomi, Magister Akuntasi dan Keuangan dari Aberystwyth University, serta Fellow of Institute of Chartered Accountants England and Wales. Sebelumnya, beliau pernah menjabat sebagai Auditor and Tax Consultant PwC, BDO Tax Consultant di Stoy Hayward LLP, Direktur Pajak dan Perbendaharaan Hanson UK, dan Direktur Keuangan Hanson UK, HeidelbergCement Group. Saat ini, beliau menjabat sebagai Komisaris PT Pama Indo Mining (Entitas Asosiasi Perseroan). Beliau memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{asset('template/img/testimonials/direktur 5.jpg')}}" class="testimonial-img" alt="">
                  <h3>Oey Marcos</h3>
                  <h4>Direktur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Warga negara Indonesia, usia 49 tahun. Beliau menjabat sebagai Direktur Perseroan sejak 4 Juni 2018. Meraih gelar Sarjana Ekonomi jurusan Akuntasi dari Universitas Trisakti, Magister Manajemen di Bidang Bisnis Strategis dari Institute Business and Management Prasetia Mulya. Sebelumnya, beliau pernah menjabat sebagai Auditor Eksternal di Kantor Akuntan Publik Prasetio, Utomo & Co (Anggota dari Arthur Andersen), General Manager of Finance & Accounting pada Sugar Group Companies, Plant Controller Indocement, dan Asisten Direktur Utama and Corporate Public & Internal Affairs Division Manager. Saat ini, beliau juga menjabat di beberapa Entitas Anak Perseroan. Beliau tidak memiliki hubungan afiliasi dengan anggota Dewan Komisaris, Direksi dan Pemegang Saham Pengendali.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->


   <!-- ======= Book Section ======= -->
   <section id="dropdown" class="dropdown">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Book</h2>
        <p>Check our Book</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('template/img/team/bukupkl.png') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Buku Laporan PKL</h4>
              <span>Mochammad Fazrhi Akbari</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('template/img/team/bukupromosi.png') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Buku Promosi</h4>
              <span>Prof.Dr.Soekidjo,S.K.M,M.Com.H.</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('template/img/team/bukureferensi.png') }}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Buku Referensi</h4>
              <span>R.H Siniapar</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Book Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> GWG2+G42, Unnamed Road, Citeureup, Kec. Citeureup, Kabupaten Bogor, Jawa Barat 16810</p>
              </div>
        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3779020958054!2d106.89808941414019!3d-6.473724765096039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c16158bdfa4f%3A0xf202c179e7998c4b!2siSHELTER%20Indocement%20SHE%20Learning%20Center!5e0!3m2!1sen!2sid!4v1657262756923!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="email">
          <i class="bi bi-envelope"></i>
          <h4>Email:</h4>
          <p>ishelter@gmail.com</p>
        </div>

        <div class="phone">
          <i class="bi bi-phone"></i>
          <h4>Call:</h4>
          <p>(021) 868 699 11</p>
        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3>I SHELTER<span></span></h3>
                  <p>
                    GWG2+G42, Unnamed Road, Citeureup, Kec. Citeureup, Kabupaten Bogor, Jawa Barat 16810 <br><br>
                    <strong>Phone :</strong> (021) 868 699 11 <br>
                    <strong>Email :</strong> ishelter@gmail.com<br>
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Galery</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="peminjam">Book</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
              <h4>Get Social</h4>
              <p>Silahkan menghubungi kontak di bawah ini.</p>
                <div class="social-links mt-3">
                  <a href="https://twitter.com/harmoni3roda" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="https://www.facebook.com/harmoni3roda/" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://instagram.com/harmoni3roda?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://youtube.com/channel/UCrL08Tz_H-wt5tzn_NvSCqg" class="youtube"><i class="bx bxl-youtube"></i></a>
                  <a href="https://www.linkedin.com/in/harmoni3roda-undefined-35a5a323a" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Feedback
                </h4>
                <p>Send me tips, trends, freebies, updates & offers.</p>
                <form action="mailto:contact@mhmmdfazhri.com" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>I SHELTER</span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('template/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>
