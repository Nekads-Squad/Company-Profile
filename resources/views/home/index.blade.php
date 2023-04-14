<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CompanyProfile</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/user.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  </style>

  <body>


    <!--    Main Content-->

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top p-0" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/PiZi-logos_transparent.png" width="80" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#ourservice">Our Services</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#portofolio">Portofolio</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

        
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

          <div class="container">
            @foreach ($headers as $index => $header)
            <div class="row align-items-center py-lg-8 py-6" {{ $index === 0 ? 'active' : ''}}>
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6">{{ $header->title }}</h1>
                <p class="text-white py-lg-3 py-2">{{ $header->description }}</p>
                <div class="gap-3 d-md-flex justify-content-md-center d-lg-flex justify-content-lg-start">
                  <button class="py-3 w-lg-50 w-md-50 w-75 hover-2">Get Started</button>
                </div>
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="assets/img/hero/{{ $header->image }}" alt="" /></div>
            </div>
            @endforeach

            <div class="swiper">
              <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                <div class="swiper-wrapper">
                  @foreach ($technologies as $index => $technologie)
                  <div class="swiper-slide text-center mx-5"><img src="assets/img/tech/{{ $technologie->image }}" alt="" /></div>
                  @endforeach 
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="container">
          <div class="row p-0  mt-5">
          <!-- <img class="img-fluid w-50 imgS" src="assets/img/blog/business-people-pointing-tablet.jpg" alt="" /> -->
          <h1 class="fw-bold text-center text-dark" id="ourservice">Our Services</h1>
          <div class="container-service">
            <div class="icon">
              @foreach ($services as $index => $service)
                <div class="imgbx" style="--i:{{ $index + 1 }};" data-id="content{{ $index + 1 }}">
                  <img src="{{ asset('img/'.$service['image']) }}" alt="">
                </div>
              @endforeach
            </div>
            <div class="content">
              @foreach ($services as $index => $service)
                <div class="contentbx {{ $index === 0 ? 'active' : '' }}" id="content{{ $index + 1 }}">
                  <div class="card">
                    <div class="imgbx">
                      <img src="{{ asset('img/'.$service['image']) }}" alt="">
                    </div>
                    <div class="textbx">
                      <h2 class="text-dark">{{ $service['title'] }}<br></h2>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>          
        </div>
          <!-- end of .container-->
  
        </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-dark pt-6">

        <div class="container" id="portofolio">
          <div class="col-md-6">
            <h1 class="text-white fs-lg-5 fs-md-3 fs-2 fw-bold">This is a collection of portfolios we've worked on</h1>
          </div>
          <div class="swiper mt-7">
            <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":20},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":true,"freeMode":true,"loopedSlides":3}'>
              <div class="swiper-wrapper">
                @foreach ($portfolios as $index => $portfolio)
                <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <figure>
                      <img src="assets/img/port/{{ $portfolio->image }}" class="w-100" style="height: 250px;" alt="Mountains">
                      <figcaption>{{ $portfolio->title }}<p class="text-dark">{{ $portfolio->description }}</p></figcaption>
                  </figure>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
            <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pb-0">
          <div class="container">
            <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75 fw-bold text-dark">Partners : </h2>
            <div class="row mt-7 gx-xl-7">
              @foreach ($partners as $index => $partner)
                  
              <div class="col-md-6 col-lg-4 text-center text-md-start h-auto mb-5">
                <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/{{ $partner->image }}" alt="" height="295px" /></a>
                  <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3 justify-content-lg-center">
                    <h4 class="mb-0">{{ $partner->title }}</h4>
                  </div><a href="#">
                    <h5 class="mt-1 mb-3 fs-0 fs-md-1 text-center">{{ $partner->description }}</h5>
                  </a>
                </div>
              </div>
              @endforeach
    
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
      
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0">

        <div class="container">
          <p class="text-center text-gray fs-1">Our Blog</p>
          <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">Value proposition accelerator product management venture</h2>
          <div class="row mt-7 gx-xl-7">
            @foreach ($artikels as $index => $artikel)
            <div class="col-md-4 text-center text-md-start h-auto mb-5">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/{{ $artikel->image }}" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                  <p class="fw-bold mb-0 text-black">Category</p>
                </a>
                <p class="mb-0">{{ date('F d, Y') }}</p>
              </div><a href="#">
                <h5 class="mt-1 mb-3 fs-0 fs-md-1">{{ $artikel->description }}</h5>
              </a>
              <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" /><a href="#">
                <p class="mb-0 text-gray">{{ $artikel->partner }}</p>
              </a></div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="text-center mb-3">
        </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>

    <!--    End of Main Content-->






    <section>

      <div class="container bg-dark overflow-hidden rounded-1">
        <div class="bg-holder" style="background-image:url(assets/img/promo/promo-bg.png);">
        </div>


        <div class="px-5 py-7 position-relative">
          <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">Consulting</h1>
          <div class="row justify-content-center align-items-center mt-5">
            <form method="POST" action="{{ route('consulting.store') }}">
              @csrf
              <div class="row">
                <div class="col-lg-6 mt-lg-0 mt-3">
                  <input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email">
                </div>
                <div class="col-lg-12 mt-lg-3 mt-3">
                  <textarea class="form-control" placeholder="Message" name="message" rows=""></textarea>
                </div>
              </div>
              <div class="row mt-5 ">
                <div class="col d-flex justify-content-center">
                  <button type="submit" class="btn btn-success text-dark fs-1 text-center w-100">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


    </section>


    {{-- <section>
      <form method="POST" action="{{ route('consulting.store') }}">
        @csrf
    
        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
        </div>
    
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
    
        <div>
            <label for="message">Pesan:</label>
            <textarea name="message" id="message" required></textarea>
        </div>
    
        <button type="submit">Kirim</button>
    </form>
      
    </section> --}}


      <div class="container my-5">
        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-dark"
                style="background-color: #fff"
                >
          <!-- Section: Social media -->
          <section
                  class="d-flex justify-content-between p-4 text-white bg-dark">
            <!-- Left -->
            <div class="me-5">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
              <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold">PiZi</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    Hardware & Software Provider and System Integrator Company based on Jakarta, Indonesia.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Our Service</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-dark">Web Application</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Mobille Application</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Data Platform</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Data Analytics</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">infrastructure</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">AR/VR</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-dark">Home</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">About Us</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Technologies</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Our Service</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Portofolios</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Partners</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
                  @foreach ($contact as $index => $contact)
                  <p><a class="text-dark" href="#">{{ $contact->email_place }}</a></p>
                  <p><a class="text-dark" href="#">{{ $contact->alamat1 }}</a></p>
                  <p><a class="text-dark" href="#">{{ $contact->alamat2 }}</a></p>
                  <p><a class="text-dark" href="#">{{ $contact->alamat3 }}</a></p>
                  <p><a class="text-dark" href="#"><b>Email:</b> {{ $contact->email }}</a></p>
                  @endforeach
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div
              class="text-center p-3"
              style="background-color: #ECEFF1"
              >
            © 2023 Copyright:
            <a class="text-dark" href=""
              >Pietro & Ziqry</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="pt-0">

      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12"><a href="index.html"><img src="assets/img/PiZi-logos_transparent.png" width="100" alt="" /></a>
            <p class="w-lg-75 text-gray text-dark-opacity">Hardware & Software Provider and System Integrator Company based on Jakarta, Indonesia.</p>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Useful Links</h3>
            <ul class="list-unstyled">
              <li class="my-3 col-md-4"><a class="text-dark-opacity" href="#">Home</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">About us</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Our Services</h3>
            <ul class="list-unstyled">
              <li class="my-3"><a class="text-dark-opacity" class="text-dark-opacity" href="#">Web Application</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Mobile Application</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Data Platform</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Data Analytics</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">infrastructure</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">AR/VR</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Contact us</h3>
            @foreach ($contact as $index => $contact)
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-dark-opacity" href="#">{{ $contact->email_place }}</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">{{ $contact->alamat1 }}</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">{{ $contact->alamat2 }}</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">{{ $contact->alamat3 }}</a></li>
              <li class="mb-3 mt-5"><a class="text-dark-opacity" href="#"><b>Phone:</b> <br>{{ $contact->phone }}</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#"><b>Email:</b> {{ $contact->email }}</a></li>
            </ul>
            @endforeach
          </div>
        </div>
        <p class="text-gray text-dark-opacity">All rights reserved.</p>
      </div>

    </section> --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!--    JavaScripts-->
    <script>
      let imgbx = document.querySelectorAll('.imgbx');
      let contentbx = document.querySelectorAll('.contentbx');

      for (let i=0; i<imgbx.length; i++){
          imgbx[i].addEventListener('mouseover', function(){
              for(let i=0; i<contentbx.length; i++){
                  contentbx[i].className = 'contentbx';
              }
              document.getElementById(this.dataset.id).className = 'imgbx';

              for (let i=0; i<imgbx.length; i++){
                  imgbx[i].className = 'imgbx';
              }
              this.className ='imgbx active';
          })
      }
  </script>
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>