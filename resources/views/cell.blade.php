@extends('layouts.app')
@section('content')
<div class="ctn" style="width:100%;margin-top:200px;">
  <nav id="navbar" class="navbar order-last order-lg-0" style="margin-top:-45px;margin-bottom:-50px;height:40px;padding-top:0px;padding-bottom:0px;">
      <ul style="height:20px;">
        <li><a href="index">
        <span><i class="fas fa-home"></i></span>  
        Home</a></li>

        <li class="dropdown"><a href="#">
          <i class="fas fa-graduation-cap"></i><span>About</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
          <li><a class="active" href="/" style="color:#cc0000;">Training & Placement</a></li>
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

{{-- puth content here --}}
<div class="spacing my-4" ></div>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in" style="margin-top:-25px;">
  <img src="{{URL::asset('assets/img/placement.jpg')}}" class="img-fluid" alt="" style="height:200px;width:100%;opacity:0.5;">
    <div class="container">
      <h2 style="margin-top:-130px;color:#00000;">About T&P Cell</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="margin-top:100px;">

      <div class="row">
      <div class="aboutus">
          <h1>About Training & Placement Department Cell</h1>
          <div class="about-blog">
              <div class="about-pic">
                  <img src="{{URL::asset('assets/img/about.jpg')}}">
              </div>
          <div class="about-pic">
          <p>The Training and Placement Cell of I.K. Gujral Punjab Technical University Amritsar Campus handles campus placement of M.Tech Computer Science & Engineering(CSE), B.Tech Computer Science & Engineering(CSE), B.Tech Mechanical Engineering(ME) and Bachelor of Computer Applications(BCA) graduating students. The Placement Cell provides complete support to the visiting Companies at every stage of placement process. Arrangements for Pre-Placement Talks, Written Tests, Interviews and Group Discussions are made as per the requirement of the visiting companies. The Cell has modern infrastructure facilities for receiving various companies in the campus.The department is geared up to provide its quality services not only in employment to students during studies, but also their employability through well planned and organized training and personality development programmes and their development to face the corporate world. The cell also organizes seminars, group discussions, and mock interviews as a part of career guidance and personality development.</p>
          </div>
          <br>
                  <p>It gives us immense pleasure to see our students scaling new heights in their career, the advent of which is through Campus recruitment. The Team Placement works day in and day out to ensure that the best of the corporate visit us to recruit our students and thus ensure that a right foundation is given to the students.</p>
                  <p> Already 04 batches have been passed out from IKGPTU Amritsar Campus and maximum students have been placed in different companies either by inviting companies for campus drive or arranging the Off-Site Interview. Students from not only IKGPTU Amritsar Campus but from various other colleges have participated in the Joint Campus Placement Drives.</p>
                  <p>The highest package being offered so far was of Rs. 10.00 LPA. IKGPTU Amritsar Campus has achieved a signified result by getting good number of placement record in graduation courses of B.Tech and BCA till date.</p>
                  <p>IKGPTU Amritsar Campus has achieved remarkable result in the placements of students in various acknowledged companies like Tata Consultancy Services, Accenture, Rein Games, Covalience, Techies Infotech, Kochar Infotech, Skyach Software Solutions and many other companies.</p>
              </div>
              <p>Companies have visited the campus by offering different profiles like Software Engineer Trainee, Software Engineering Associate, Software Developer, Business Development Executive, Graduate Engineer Trainee, Project Manager, Technical Recruiter, Content Writer, Digital Marketing Specialist, Android Developer, iOS Developer, and many other profiles.</p>

          </div>
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

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Staff</h2>
        <p>What are they saying</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{URL::asset('assets/img/staff1.png')}}" class="testimonial-img" alt="">
                <h3>Dr. Amit Sareen</h3>
                <h4>Director Of IKGPTU Asr.</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left" style="color:#b3c6ff"></i>
                  IKGPTU is the best technical institute in allover punjab. We provide top placement criteria to our students.
                  <i class="bx bxs-quote-alt-right quote-icon-right" style="color:#b3c6ff"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{URL::asset('assets/img/trainer-2.jfif')}}" class="testimonial-img" alt="">
                <h3>Dr. Vipul Sharma</h3>
                <h4>Head of Department(CSE)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left" style="color:#b3c6ff"></i>
                  IKGPTU generally focus on how to achieve milestones and polish student's skills.
                  <i class="bx bxs-quote-alt-right quote-icon-right" style="color:#b3c6ff"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{URL::asset('assets/img/trainer-1.jpg')}}" class="testimonial-img" alt="" style="height:120px;width:21%;">
                <h3>Dr. Vikramjeet Singh</h3>
                <h4>Assistant Professor</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left" style="color:#b3c6ff"></i>
                  Our College provides well education so that students can get placed in MNCs.
                  <i class="bx bxs-quote-alt-right quote-icon-right" style="color:#b3c6ff"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{URL::asset('assets/img/trainer-4.jpg')}}" class="testimonial-img" alt="" style="height:120px;width:21%">
                <h3>Dr. Mrigender Singh Bedi</h3>
                <h4>T&P Coordinator</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left" style="color:#b3c6ff"></i>
                  The criteria of education and displine is well maintained and there is a friendly environment.
                  <i class="bx bxs-quote-alt-right quote-icon-right" style="color:#b3c6ff"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{URL::asset('assets/img/staff2.jpg')}}" class="testimonial-img" alt="">
                <h3>Dr. Sukhminderbir Singh Kalsi</h3>
                <h4>Head of Department(ME)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left" style="color:#b3c6ff"></i>
                  We motivate our students to break the targets with a rapid growth. 
                  <i class="bx bxs-quote-alt-right quote-icon-right" style="color:#b3c6ff"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination" style="color:#000080;margin-top:-300px;"></div>
      </div> 

    </div>
  </section><!-- End Testimonials Section -->

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
            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="placementsyllabus">Placement Preparation</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="team">Student Team</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="charms">Our Charms</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="faq">FAQ</a></li>
          </ul>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Other Campuses</h4>
      <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="https://ptu.ac.in/">Main Campus, Kapurthala</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="https://hoshiarpur.ptu.ac.in/">Hoshiarpur</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="https://amritsar.ptu.ac.in/">Amritsar</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="https://mohali.ptu.ac.in/">Mohali Campus-I</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="https://mohali.ptu.ac.in/">Mohali Campus-II</a></li>
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
<script src="{{URL::asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>

</html>



{{-- end the pasted content --}}

