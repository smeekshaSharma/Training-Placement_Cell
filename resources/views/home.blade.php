@extends('layouts.app')
@section('content')
<div class="ctn" style="width:100%;margin-top:30px;">
    <nav id="navbar" class="navbar order-last order-lg-0" style="margin-top:-45px;margin-bottom:-50px;height:40px;padding-top:0px;padding-bottom:0px;">
        <ul style="height:20px;">
          <li><a class="active" href="/">
          <span><i class="fas fa-home"></i></span>  
          Home</a></li>

          <li class="dropdown"><a href="#">
            <i class="fas fa-graduation-cap"></i><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="cell" style="color:black;">Training & Placement</a></li>
              <li><a href="charms" style="color:black;">Top Placements</a></li>
              <li><a href="latestnews" style="color:black;">Job Alerts</a></li>
              <li><a href="faq" style="color:black;">FAQ</a></li>
              <li><a href="officers" style="color:black;">Officers</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">
          <i class="fas fa-file-signature"></i><span>Placement Preparation</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="placementsyllabus" style="color:black;">Preparation Syllabus</a></li>
              <li><a href="mock_test" style="color:black;">Mock Test</a></li>
            </ul>
            </li>
          <li><a href="team">
            <span><i class="fas fa-users"></i></span> 
             Student Team</a></li>
          <li><a href="contact">
            <span><i class="fas fa-envelope"></i></span>
            Contact</a></li>
            <!-- <li class="dropdown" style="margin-left:-10px;">
              <span class="get-started-btn">For Students <i class="bi bi-chevron-down"></i></span>
              <ul>
                <li>
                <div class="relative">
                    @if (Route::has('login'))
                    <div class="hidden">
                        @auth
                            <a href="{{ url('/login') }}" style="color:black;" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endauth
                </div>
            @endif
                </li>
              </ul>
            </li>  -->
            <a href="{{ route('logout') }}"><input type="button" value="Logout" style="margin-left:100px;background-color:#cc0000;color:white;border-style:none;width:130px;height:35px;border-radius:150px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></a>
            <!-- <li class="dropdown" style="margin-left:80px;">
              <span class="get-started-btn">Logout <i class="bi bi-chevron-down"></i></span>
              <ul>
                <li>
                <div class="relative">
                @if (Route::has('login'))
                            <a href="{{ route('login') }}" style="color:black;" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                        @endif -->
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav>
</div>

  <!-- ======= Header ======= -->
  <header id="headerr">
</div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section style="margin-top:6.70%;">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="2000" style="margin-top:-60px;">
      <img src="{{URL::asset('assets/img/slider1.jpg')}}" class="d-block w-100 h-100" style="object-fit:contain;" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000" style="margin-top:-60px;">
      <img src="{{URL::asset('assets/img/slider3.jpg')}}" class="d-block w-100 h-100" style="object-fit:contain;" alt="...">
    </div>
    <div class="carousel-item" style="margin-top:-60px;">
      <img src="{{URL::asset('assets/img/slider2.jpg')}}" class="d-block w-100 h-100" style="object-fit:contain;" alt="...">
    </div>
    <div class="carousel-item" style="margin-top:-60px;">
      <img src="{{URL::asset('assets/img/slider5.jpg')}}" class="d-block w-100 h-100" style="object-fit:contain;" alt="...">
    </div>


      <div class="carousel-item" style="margin-top:-60px;">
        <img src="{{URL::asset('assets/img/slider4.jpg')}}" class="d-block w-100 h-100" style="object-fit:contain;" alt="...">
      </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/building.jpg" class="img-fluid" style="border-radius:50px;" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About College</h3>
            <p class="fst-italic">
            IKGPTU Amritsar Campus has been established in 2014 to provide Quality Technical Education especially to students from rural belt belonging to weaker sections of society and to people of all sections in general. The main focus is to produce Quality Engineers according to the needs of Industry at State, National and International levels. IKGPTU Amritsar Campus has prime location on G.T Road, Amritsar near Guru Nanak Dev University. It has vast campus having smart classrooms, well equipped labs, updated library with latest collection of books, and a well-equipped conference hall with audio-video facilities.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Post Matric Scholarships for SC/ST/OBC students as per Government rules.</li>
              <li><i class="bi bi-check-circle"></i> A student friendly campus with absolute discipline and safety.</li>
              <li><i class="bi bi-check-circle"></i> Placements in various leading Multi-National Companies.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content" style="border-radius:50px;">
              <h3>Why Choose Mentor?</h3>
              <p>
              A mentor may share with a mentee (or protege) information about his or her own career path, as well as provide guidance, motivation, emotional support, and role modeling. A mentor may help with exploring careers, setting goals, developing contacts, and identifying resources. The mentor role may change as the needs of the mentee change.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" style="border-radius:20px;">
                  <i class="fas fa-chart-line"></i>
                    <h4>Growth</h4>
                    <p>Takes a long-range view of your growth and development.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" style="border-radius:20px;">
                  <i class="fas fa-trophy"></i>
                    <h4>Encouragement</h4>
                    <p>Offers encouragement and cheerleading, but not "how-to" advice.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" style="border-radius:20px;">
                  <i class="fas fa-map-marked-alt"></i>
                    <h4>Destiny</h4>
                    <p>Helps you see the destination but does not give you a detailed map to get there.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item" style="border-radius:50px;">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>BCA</h4>
                </div>

                <h3><a href="course-details.html">Bachelors in Computer Application.</a></h3>
                <p>BCA is a 3-year undergraduate degree programme that focusses on knowledge on the basics of computer application and software development.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Dr.Vikramjeet Singh</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item" style="border-radius:50px;">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>B.tech (CSE)</h4>
                </div>

                <h3><a href="course-details.html">Bachelors of Technology (CSE)</a></h3>
                <p>B.Tech Computer Science, is a full-time engineering undergraduate degree programme in computer science that is concerned with the design, construction, and operation of computer hardware and software.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainer-2.jfif" class="img-fluid" alt="">
                    <span>Dr.Vipul Sharma</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item" style="border-radius:50px;">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>B.tech (ME)</h4>
                </div>

                <h3><a href="course-details.html">Bachelors of Technology (ME)</a></h3>
                <p>Mechanical Engineering is the broadest of engineering disciplines. It emerged as a field during the Industrial revolution and has continually evolved by incorporating numerous technical advancements.</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainer-3.jfif" class="img-fluid" alt="">
                    <span>Dr.Prabhkiran Kaur</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Training and Placement Cell</h2>
          <p>Our Officer</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainer-4.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr. Mrigender Singh Bedi</h4>
                <span>Assistant Director</span>
               <p><i class="fas fa-phone-alt"></i> +91-947-809-8076<br>
               <i class="fas fa-envelope"></i> msbedi@ptu.ac.in</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainer-3.jfif" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr. Prabkkiran Kaur</h4>
                <span>T&P Coordinator (ME)</span>
                <p><i class="fas fa-phone-alt"></i> +91-946-588-4846<br>
               <i class="fas fa-envelope"></i> dr.prabhkiran@ptu.ac.in</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainer-5.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sh. Tarun Kanodia</h4>
                <span>T&P Coordinator(CSE/CA)</span>
                <p><i class="fas fa-phone-alt"></i> +91-708-736-4656<br>
               <i class="fas fa-envelope"></i> tarun.kanodia@ptu.ac.in</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>T&P Cell</h3>
            <p>
            Ikgptu Amritsar Campus, Polytechnic Road, Near Cipet College, Po Chheharta Amritsar, Punjab - 143105 <br><br>
            <i class="fas fa-phone-alt"></i> 7087364656, 9465884808<br>
            <i class="fas fa-envelope"></i> campus.amritsar@ptu.ac.in<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="placementsyllabus">Placement Preparation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="team">Student Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="charms">Our Charms</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="faq">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Other Campuses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="https://ptu.ac.in/">Main Campus, Kapurthala</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="https://hoshiarpur.ptu.ac.in/">Hoshiarpur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="https://amritsar.ptu.ac.in/">Amritsar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="https://mohali.ptu.ac.in/">Mohali Campus-I</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="text-decoration:none;" href="https://mohali.ptu.ac.in/">Mohali Campus-II</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Message Us</h4>
            <p>Come and grab the opportunities to get placed in MNCs.</p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>
</body>
</html>


@endsection
