<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Bname="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




    {{-- @yield('css') --}}
    <link rel="stylesheet" href="\css\dashboard.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="style2.css"> --}}
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


     <!-- Custom styles for this page -->


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">



</head>
<body>
  <header>
    <a href="#" class="logo">iGen<span style="font-weight: bold;">Protection</span></a>
          <div class="inner-main-nav" id="main-nav">
              <ul>
                <li><a href="#">Asuransi Kami</a></li>
                <li><a href="#">Iklan & Layanan</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <i class="ri-mail-unread-line"></i>
                <li><a href="ProfilPolis1" class="login">Bae Suzy</a></li>
                <img src="images/doona3.jpeg">
              </ul>
          </div>
          <div class="bx bx-menu" id="menu-icon"></div>
      </header>
    <div class="wrappermenu">

        <!-- Page Content  -->
        <div id="content">

                      <!-- akhir navbar atas -->
                      @yield('isi')

                      <section id="about" class="about">
                        <div class="row2">
                            <div class="content2">
                                <h3>Taking Care of What's  Important</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Unde, maiores. Recusandae numquam, molestiae nemo, maxime quos earum dolorem, voluptatum voluptatem aliquid iste eaque cum consectetur natus vitae cumque illo fuga!</p>
                                <a href="#" class="cta">Learning More</a>
                            </div>
                        </div>
                      </section>


                      <!--<section class="blog-card">
                        <div class="row">
                          <img
                          src="https://fastly.picsum.photos/id/949/1200/800.jpg?hmac=mW-_YmIqUMbyF5ydxz0QPn1GHneBWJEVlNCValTT5xw"
                          alt="white palace ceiling view"
                          />
                          <div class="blog-content">
                            <p class="blog-label">Technology</p>
                            <h1>Life Insurance</h1>
                            <p>
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem
                              aliquid sunt temporibus repellendus neque, quibusdam exercitationem.
                            </p>
                          </div>
                        </div>
                      </section>-->
                      <section id="selection" class="insurance">
                        <div class="our-insurance">
                          <h1>Our Insurance</h1>
                        </div>
                        <div class="wrapper">
                              <div class="img-hover-zoom">
                                  <img src="images/life.jpg">
                                  <div class="overlay-text">Life Insurance</div>
                              </div>
                              <div class="img-hover-zoom2">
                                  <img src="images/finansial2.jpg">
                                  <div class="overlay-text">Financial Insurance</div>
                              </div>
                        </div>
                      </section>



                      <div class="slogan">
                        <h1>WE PROVIDE THE BEST INSURANCE POLICY</h1>
                      </div>

                      <section id="about2" class="about2">
                        <div class="row-cuy">
                          <div class="content">
                            <h3>Why Should Us?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorum necessitatibus vel nesciunt vitae incidunt quasi debitis dolore repudiandae commodi.
                               Non eligendi voluptatum laboriosam accusantium adipisci, magnam debitis deleniti autem.</p>
                            <a href="#" class="cta2">Get Started Now</a>
                          </div>
                          <div class="about-img">
                              <img src="images/asuransi.jpg" alt="Tentang Kami">
                          </div>
                        </div>
                      </section>

                      <section id="calculator" class="calculator">
                        <div class="cal">
                          <h3>Let's Try Our Best Calculator</h3>
                        </div>
                        <div class="mtk">
                          <h4>My <input type="number" id="age" placeholder="Age"> and I want to save my money about
                          <input type="number" id="saveAmount" placeholder="Enter an amount"></h4>
                          <button class="btn-calculator">Result</button>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nihil nisi pariatur eum quam, ut eveniet mollitia perspiciatis ducimus ab nemo, debitis laborum corrupti nostrum. Excepturi culpa porro distinctio nulla!</p>
                        </div>
                      </section>


{{-- FOOTER --}}
                      <footer class="footer-distributed">

                        <div class="footer-left">

                          <h3>iGen</span><span style="font-weight: bold;">Protection</span></h3>

                          <p class="footer-links">
                            <a href="#home" class="link-1">Home</a>

                            <a href="kamera.html">Asuransi</a>

                            <a href="#about">Iklan & Layanan</a>

                            <a href="#">Tentang Kami</a>
                          </p>

                          <p class="footer-company-name">iGenProtection © 2023</p>
                        </div>

                        <div class="footer-center">

                          <div>
                            <i class="ri-map-pin-line"></i>
                            <p><span>Jl. Ganteng No.5</span> Cikokol, Kota Tangerang</p>
                          </div>

                          <div>
                            <i class="ri-phone-fill"></i>
                            <p>+6282182089</p>
                          </div>

                          <div>
                            <i class="ri-mail-send-line"></i>
                            <p><a href="mailto:support@company.com">igenprotection@gmail.com</a></p>
                          </div>

                        </div>

                        <div class="footer-right">

                          <p class="footer-company-about">
                            <span>About the company</span>
                            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                          </p>

                          <div class="footer-icons">

                            <a href="#"><i class="ri-facebook-box-line"></i></a>
                            <a href="#"><i class="ri-twitter-line"></i></i></a>
                            <a href="#"><i class="ri-instagram-line"></i></i></a>
                            <a href="#"><i class="ri-youtube-line"></i></i></a>

                          </div>

                        </div>

                      </footer>


        </div>
    </div>


    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        @yield('JS')
        <script src="{{ asset('js1.js') }}"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script>
            let menu = document.querySelector('#menu-icon');
            let navbar = document.querySelector('#main-nav');

            menu.onclick = () => {
                menu.classList.toggle('bx-x');
                navbar.classList.toggle('open');
            };
        </script>



</body>
</html>



