<!DOCTYPE html>
<html lang="en">
<head>

     <title>AILearning</title>
<!--
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
     <link rel="stylesheet" href="{{ asset('css/Guest/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/fonts/guest/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/Guest/aos.css') }}">
     <link rel="stylesheet" href="{{ asset('css/Guest/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/Guest/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('css/Guest/templatemo-digital-trend.css') }}">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              AILearning
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">Studio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link smoothScroll">Our Works</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="contact.html" class="nav-link contact">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Belajar Dengan AI , Semakin mudah</h1>

                                   <a href="{{ route('user.login.index') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Coba Sekarang</a>

                                   <!-- <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong> -->
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="{{ asset('images/Guest/logo_belajar.png') }}" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Cara Belajar Yang <strong>Efisien </strong> Menggunakan AI</h2>

                              <p class="mb-0" data-aos="fade-up">Belajar Akan Lebih Mempermudah Menggunakan AI . Mempermudah interaksi antara guru dan murid .
                              <br><br>Interaksi dapat lebih  <strong>Mudah</strong> Guru dapat memberikan materi lebih <strong>Efisien</strong> dari fitur-fitur yang ada dan murid dapat belajar lebih <strong>Efisien</strong> menggunakan fitur-fitur yang ada .</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="{{ asset('images/Guest/Belajar_mudah.png') }}" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Contoh beberapa fitur yang tersedia 
                            <strong>Fitur AILearning</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="{{ asset('images/Guest/project/project-image01.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                     
                                        <small>(Guru)</small>
                                          <br>
                                          <small>Guru Dapat Memberikan Materi Ujian Dengan Bantuan AI</small>
                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Memberikan Materi Ujian Dengan AI</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/Guest/project/project-image02.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>(Siswa)</small>
                                          <br>
                                          <small>Siswa Dapat Menerima Materi Ujian Secara Efisien Dengan AI</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Menerima Materi Ujian</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/Guest/project/project-image03.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>(Guru)</small>
                                        <br>
                                        <small>Guru Dapat Memberikan Materi Ujian Berupa Video, <br> dan di konversikan menjadi text rangkuman , Dengan Bantuan AI</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Konversi AI</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/Guest/project/project-image04.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>(Siswa)</small>
                                        <br>
                                        <small>Siswa Dapat Melakukan Sesi Tanya Jawab Dengan AI 24 jam </small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>AI SESI</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/Guest/project/project-image05.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Video</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Ultimate HealthCare</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="{{ asset('images/Guest/female-avatar.png') }}" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Belajar Menjadi Lebih Efisien dengan AI Kita Bisa Langsung Menanyakan Hal yang ingin kita tanyakan secara to the point .</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Aldi Taher</strong>

                        <span class="mx-1">/</span>

                        <small>Murid SMA</small>
                      </p>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Buat Hidup lebih <strong>Creative</strong> dan <strong>Efisien</strong> dengan <strong>AI</strong>.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +62 8099271627127
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                AILearning@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
               Sukun - Kota Malang - Jawa Timur -Indonesia 
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2023 AILearning
            <br>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="{{ asset('js/Guest/LandingPage/jquery.min.js') }}"></script>
     <script src="{{ asset('js/Guest/LandingPage/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/Guest/LandingPage/aos.js') }}"></script>
     <script src="{{ asset('js/Guest/LandingPage/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/Guest/LandingPage/smoothscroll.js') }}"></script>
     <script src="{{ asset('js/Guest/LandingPage/custom.js') }}"></script>

</body>
</html>