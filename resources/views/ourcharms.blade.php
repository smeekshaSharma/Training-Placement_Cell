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
          <li><a href="cell" style="color:black;">Training & Placement</a></li>
            <li><a class="active" href="/" style="color:#cc0000;">Top Placements</a></li>
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
            <a href="{{ route('logout') }}"><input type="button" value="Logout" style="margin-left:100px;background-color:#cc0000;color:white;border-style:none;width:130px;height:35px;border-radius:150px;" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"></a>
      </nav>
</div>

  <!-- ======= Header ======= -->
<section id="trainers" style="margin-top:80px;" class="trainers">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Our Charms </h2>
          <p>Top Placements</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm1.jfif')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Gaurav Dadwal</h4>
                <span>Rs.10.00 Lakhs per annum</span>
               <p><img src="{{URL::asset('assets/img/byjus.jpg')}}" style="height:80px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm2.jfif')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Reshav Thakur</h4>
                <span>Rs.10.00 Lakhs per annum</span>
                <p><img src="{{URL::asset('assets/img/byjus.jpg')}}" style="height:80px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm3.jfif')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Akshay Kumar</h4>
                <span>Rs.7.00 Lakhs per annum</span>
                <p><img src="{{URL::asset('assets/img/accenture.jpg')}}" style="height:100px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm4.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Shivam Arora</h4>
                <span>Rs.5.00 Lakhs per annum</span>
                <p><img src="{{URL::asset('assets/img/rein.jpg')}}" style="height:100px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm5.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Shivani Sharma</h4>
                <span>Rs.3.60 Lakhs per annum</span>
                <p><img src="{{URL::asset('assets/img/covalience.png')}}" style="height:100px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{URL::asset('assets/img/charm6.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Simranjeet Singh</h4>
                <span>Rs.3.5 Lakhs per annum</span>
                <p><img src="{{URL::asset('assets/img/tata.jpg')}}" style="height:100px;" class="img-fluid" alt=""></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

 
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

  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="{{URL::asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>

</html>
