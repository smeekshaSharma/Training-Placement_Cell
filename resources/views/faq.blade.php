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
            <li><a href="charms" style="color:black;">Top Placements</a></li>
            <li><a href="latestnews" style="color:black;">Job Alerts</a></li>
            <li><a class="faq" href="/" style="color:#cc0000;">FAQ</a></li>
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
<div class="col-xs-12 wrapper">
  <img src="{{URL::asset('assets/img/faq.jpg')}}" style="margin-top:55px;height:250px;width:100%;">
    <div class="container coon">
    <h2>FAQ</h2>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      What are the different ways a company can hire students from the campus?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      The different ways of recruiting students are:<br>

           1. Campus Recruitment Program in which final year students participate<br>
           2. Summer Internship Program for 3rd year students which can be converted into a pre placement offer<br> 
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How can a company register itself for the Campus Recruitment Program?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      To participate in the Campus Recruitment Program, a company must fill in the Job Notification Form and mail it at tpo@iitbhu.ac.in. The opportunity is posted on the forum and the list of interested students is communicated to the company. You can also find the detailed Placement Procedure here
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Is there any fee associated with the process?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      No. There is no fees associated with the registration or the placement process.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      What is the procedure to schedule a pre-placement talk (PPT)?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      A company will only be allowed to hold its PPT after filling up the job announcement form. A typical pre placement session is scheduled for 60 minutes. In view of the academic calendar of the students, the session are scheduled between 6PM to 9PM on weekdays, and between 10AM and 8PM hours on Saturdays and Sundays. Student representatives will get in touch with the company to fix a mutual convenient time for the sessionA company will only be allowed to hold its PPT after filling up the job announcement form. A typical pre placement session is scheduled for 60 minutes. In view of the academic calendar of the students, the session are scheduled between 6PM to 9PM on weekdays, and between 10AM and 8PM hours on Saturdays and Sundays. Student representatives will get in touch with the company to fix a mutual convenient time for the session
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      When does the recruitment program start?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      Please refer to the Placement Calendar for this information.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      What kind of information do the students expect in PPTs?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      The pre-placement talk is a platform for interaction between the company and the students. The presentation is followed by a Q&A session where students interact with company officials to get a better understanding of the company and potential roles. The important insights that the students expect from the PPT are:<br>

          1. Profile and reputation of the corporation<br>
          2. Career roles and responsibilities offered in different types of profiles<br>
          3. Locations where the student is likely to be posted<br>
          4. Compensation packages<br>
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      On what basis is the slot allotted to a company for the final placement?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      Slotting is done subject to the following parameters:<br>

      1. Student Preferences<br>
      2. Work profile<br>
      3. Compensation package<br>
      4. Career Prospects<br>
      5. Student Intake<br>
      6. Past relationship with IKGPTU (ASR)
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapeEight">
      What are the infrastructural facilities available on the campus for the placement process?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      The campus is equipped with state of the art communication, computing, and presentation facilities to facilitate a smooth placement process:<br>

        1. Teleconferencing and video conferencing facility<br>
        2. Linux and windows lab for online tests<br>
        3. Lecture and Seminar Halls for conducting PPTs.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      Are there multiple companies recruiting in the same slot? How is the case of multiple offers resolved?
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      Yes, there are multiple companies recruiting in the same slot.The results of all the companies are announced at the end of the slot and if a student gets multiple offers then he is allowed to choose between one of them and inform the office of his decision before the beginning of the next slot.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
      Can a company interview the students already placed in other company?
      </button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
      <div class="accordion-body"  style="color:#8c8c8c">
      IKGPTU (ASR) follows a One student; One job policy so once the job is registered against the student, he/she is not entitled to sit for any other company.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEleven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
      Is there any facility for the accommodation available on the campus?
      </button>
    </h2>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      On campus accommodation on payment basis in IKGPTU Guest House is available subject to availability. For alternate arrangements, the list of hotels is available here.
      </div>
    </div>
    </div>
    <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTweleve">
      <button class="accordion-button collapsed" type="button" dat            a-bs-toggle="collapse" data-bs-target="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
      How can one commute between the campus & airport/railway station?
      </button>
    </h2>
    <div id="collapseTweleve" class="accordion-collapse collapse" aria-labelledby="headingTweleve" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="color:#8c8c8c">
      Contact for Taxi Services:
      </div>
    </div>
    </div>
  </div>
    <hr>
    <br>
    <br>
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
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>