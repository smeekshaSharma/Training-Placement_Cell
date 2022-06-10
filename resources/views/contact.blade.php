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
        <li><a class="active" href="/">
          <span><i class="fas fa-envelope"></i></span>
          Contact</a></li>

            <a href="{{ route('logout') }}"><input type="button" value="Logout" style="margin-left:100px;background-color:#cc0000;color:white;border-style:none;width:130px;height:35px;border-radius:150px;" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"></a>
      </nav>
</div>

  <!-- ======= Header ======= -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style="margin-top:50px;">
      <div class="container">
        <h2>Contact Us</h2><br><br>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.8889943717977!2d74.81730211515347!3d31.63688958133118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39196524620094b1%3A0x8390bfe21c20ec96!2sIKGPTU%20Amritsar%20Campus!5e0!3m2!1sen!2sin!4v1648290770866!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up" style="margin-top:100px;">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Polytechnic Road, Near Cipet College, Po Chheharta Amritsar, Punjab - 143105</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>campus.amritsar@ptu.ac.in</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>7087364656, 9465884808</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            {{-- @if(count($errors)>0)
            <div class="alert alert-danager">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif --}}
            @if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{$message}}</strong>
            </div>
            @endif
          <form action="{{url('contact/send')}}" method="POST" class="row g-3">
            {{csrf_field()}}
            <div class="col-md-6">
              <input type="text" class="form-control" style="border-radius:20px;" placeholder="Your Name" id="name">
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" style="border-radius:20px;" placeholder="Your Email" id="email">
            </div>
            <div class="col-12">
              <input type="text" class="form-control" id="inputAddress" placeholder="Subject" style="margin-top:10px;border-radius:20px;">
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Message" id="floatingTextarea2" style="margin-top:10px;border-radius:20px;height: 130px;"></textarea>
              <label for="floatingTextarea2">Message</label>
            </div>
              <input type="submit" class="btn btn-primary" value="Send Message" style="width:20%;margin-left:320px;background-color:#000080;border:none;" onclick="Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Mail has been Sent',
                showConfirmButton: false,
                timer: 1500
              })">
            </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
  <script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>

</body>

</html>