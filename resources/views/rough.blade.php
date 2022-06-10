<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Placement Preparation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="48x48" href="{{URL::asset('assets/img/logo.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="conn" style="margin-bottom:-10px;">
      <div class="d-flex justify-content-between align-items-center ">
          <div class="logoContainer" style="margin-left:-30px;">
              <a href="/"><img src="https://ptu.ac.in/wp-content/themes/cynic/images/classic-logo.png" style="width: 100px;height: 100px;"></a>
          </div>
          <div class="textContainer p-4 flex-grow-1  ">
              <div class="h1 fw-bold" style="color: #000080;">Training and Placement Cell</div>
              <div class="h5 fw-normal p2 px-1 d-none d-sm-block " style="color: #cc0000;">I.K. Gujral Punjab Technical University Amritsar-Campus</div>
          </div>
          <div class="additionalInfo flex-grow-4 w-3 position-absolute end-0 top-0 px-2 shadow  d-none d-lg-block text-center" style="margin-right:30px;width:300px;background-color: #cc0000;border:2px solid white;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; border-top-right-radius: 5px;border-top-left-radius:5px;">
                    <div class="additionalInfoContent d-flex flex-column">
                      
                            <span id="SiteHeader_LblSiteEmail" >
                              <i class="fas fa-envelope" style="color:white;"></i>
                                  <a href="/" style="color:white; text-decoration: none;">campus.amritsar@ptu.ac.in</a>
                           </span>
                      <div class="seprator" style="border-bottom: 1px dotted white; padding:2px"> </div>
                        <span id="SiteHeader_LblSitePhone" class="py-1">
                          <i class="fa fa-phone-square" style="color:white;"></i>
                                <a href="/"  style="color:white; text-decoration: none;">0183-2450034 | 7087364656</a>
                          </span>
          </div>
          </div>
          
      </div>
  </div>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0" style="height:40px;">
        <ul style="margin-top:-8px;">
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
            <li><a class="active" href="placementsyllabus">Preparation Syllabus</a></li>
              <li><a href="mock_test" style="color:black;">Mock Test</a></li>
            </ul>
            </li>
          <li><a href="team">
            <span><i class="fas fa-users"></i></span> 
             Student Team</a></li>
          <li><a href="contact">
            <span><i class="fas fa-envelope"></i></span>
            Contact</a></li>
            <li class="dropdown">
              <a href="login"><span class="get-started-btn">Logout</span></a>
              <ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>
  </header><!-- End Header -->
  <body>
    <div class="container" style="margin-top:220px;">
        <h2>Top MNC's Approach</h2><hr>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    @foreach ($res as $key=>$value)
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={{"#flush-collapseOne$key"}} aria-expanded="false" aria-controls="flush-collapseOne">
            {{$value['cname']}}
        </button>
      </h2>
      <div id={{"flush-collapseOne$key"}} class="accordion-collapse collapse" aria-labelledby={{"flush-headingOne$key"}} data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <pre>{{$value['syllabus'] }}</pre>
        </div>
    </div>
        </div>
    @endforeach
    </div>
    
    </div>
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer" style="margin-top:100px;">

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
